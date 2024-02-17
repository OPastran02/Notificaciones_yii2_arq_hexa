import os
import re

####################################################################################################
####### CREADOR DE ARQUITECTURA HEXAGONAL PHP #####################################################
####################################################################################################


###################################################################################################
###################     DOMINIO     ###############################################################
###################################################################################################

#### GLOBALES

global all_properties
global variables_clase
global variables_primitivas
global nombre_variable
global esObjeto
global class_name

#### PARAMETROS INICIALES

core_folder='Ruido'
folder_structure = 'api\\Core\\Ruido\\Ruido\\Domain'
file_path = './common/models/Ruido.php'  

#### MODELO DOMINIO

def convert_yii_model_to_domain(file_path, folder_structure, core_folder):
    global all_properties
    global variables_clase
    global variables_primitivas
    global nombre_variable
    global esObjeto
    global class_name

    variables_clase = []
    variables_primitivas = []
    nombre_variable = []
    esObjeto=[]
    
    # Lee el contenido del archivo PHP
    with open(file_path, 'r') as file:
        yii_model = file.read()

    # Obtener variable global
    yii_model = re.sub(r'\@property\s+(\S+)\s+\$(\w+)', crate_global_variables, yii_model)    

    new_namespace = folder_structure
    texto_final = "<?php\ndeclare(strict_types=1);"
    texto_final += f"\n\nnamespace {new_namespace};\n\n"

    # Encuentra el nombre de la clase y extiende AggregateRoot
    class_match = re.search(r'class\s+(\w+)\s+extends\s+\\yii\\db\\ActiveRecord', yii_model)
    if class_match:
        class_name = class_match.group(1)
        texto_final += create_imports(class_name)
        texto_final += "use Yii;"
        texto_final += f"\n\nclass {class_name} extends AggregateRoot\n{{\n\n"

    texto_final += create_construct_method()
    texto_final += generate_create_method()
    texto_final += generate_from_primitives_method()
    texto_final += generate_to_primitives_method()
    texto_final += "\n}"


    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Domain'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'{class_name}.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(texto_final)

    print(f"Archivo guardado como {output_file_path}")
    return texto_final, yii_model

def crate_global_variables(match):
    aux_var = match.group(1).replace('|null', '').replace('[]', '')
    variables_primitivas.append(aux_var)
    nombre_variable.append(match.group(2))

    if "id" in match.group(2).lower():
        variables_clase.append("UUID")
    else:
        variables_clase.append(match.group(2).capitalize().replace('_', ''))
    
    if aux_var == "int" or aux_var == "float" or aux_var == "bool" or aux_var == "string":
        esObjeto.append(0)
    else:
        esObjeto.append(1)

def create_imports(class_name):

    create_import ="use api\Shared\Domain\ValueObject\{\n    UUID,\n    NID,\n};\n\n"

    create_import += f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\ValueObject\\{{\n'
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0 and variables_clase[indice] != "UUID": 
            create_import += f'    {variables_clase[indice]},\n'
    create_import +="};\n\n"

    for indice, elemento in enumerate(variables_clase):
            if esObjeto[indice] == 1 : 
                create_import += f'use api\\Core\\{core_folder}\\{variables_clase[indice]}; //Esto relacionarlo con la clase correspondiente - {variables_clase[indice]} \n'

    return create_import

def create_construct_method():
    create_construct = f'    public function __construct(\n'

    for indice, elemento in enumerate(variables_clase):
        create_construct += f'        private {variables_clase[indice]} ${nombre_variable[indice]},\n'

    create_construct += '    )\n    {}'
    return create_construct

def generate_create_method():
    create_method = "\n\n    public static function create(\n"
    for indice, elemento in enumerate(variables_clase):
      create_method += f'        {variables_clase[indice]} ${nombre_variable[indice]},\n'

    create_method = create_method.rstrip(',\n')  # Elimina la última coma
    create_method += "\n    ): self \n    {\n        return new self(\n"
    
    for indice, elemento in enumerate(variables_clase):
        create_method += f'            ${nombre_variable[indice]},\n'
    
    create_method = create_method.rstrip(',\n')  # Elimina la última coma
    create_method += "\n        );\n    }\n"
    
    return create_method

def generate_from_primitives_method():
    from_primitives_method = "\n\n    public static function fromPrimitives(\n"
    
    for indice, elemento in enumerate(variables_clase):
        from_primitives_method += f'        {variables_primitivas[indice]} ${nombre_variable[indice]},\n'
    
    from_primitives_method = from_primitives_method.rstrip(',\n')  # Elimina la última coma
    from_primitives_method += "\n    ): self \n    {\n        return new self(\n"
    
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0:
            from_primitives_method += f'            new {variables_clase[indice]}(${nombre_variable[indice]}),\n'
        else:
            from_primitives_method += f'            ${nombre_variable[indice]},\n'
    
    from_primitives_method = from_primitives_method.rstrip(',\n')  # Elimina la última coma y el paréntesis adicional
    from_primitives_method += "\n        );\n    }\n"

    return from_primitives_method

def generate_to_primitives_method():
    to_primitives_method = "\n\n    public function toPrimitives(): array\n    {\n        return [\n"
    
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0 :
            to_primitives_method += f"            '{nombre_variable[indice]}' => $this->{nombre_variable[indice]}->value(),\n"
        else:
            to_primitives_method += f"            '{nombre_variable[indice]}' => $this->{nombre_variable[indice]}->toPrimitives(),\n"        
    to_primitives_method += "        ];\n    }"

    return to_primitives_method

#### VALUE OBJECTS
def convert_yii_model_to_value_object(file_path, folder_structure, core_folder):
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0 and variables_clase[indice] != "UUID":
            valueObject=""
            clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
            clase_creada +=f'namespace {folder_structure}\\ValueObject;\n\n'

            if variables_primitivas[indice] == "int":
                valueObject += "IntValueObject"
            elif variables_primitivas[indice] == "string":
                valueObject += "StringValueObject"
            elif variables_primitivas[indice] == "bool":
                valueObject += "BoolValueObject"
            elif variables_primitivas[indice] == "float":
                valueObject += "FloatValueObject"

            clase_creada +=f'api\\Shared\\Domain\\ValueObject\\Primitives\\{valueObject};\n\n' 

            clase_creada +=f'final class {variables_clase[indice]} extends {valueObject}\n{{\n\n'
            clase_creada +=f'   protected {variables_primitivas[indice]} $value;\n\n'
            clase_creada +=f'   public function __construct({variables_primitivas[indice]} $value)\n   {{\n'
            clase_creada +=f'      parent::__construct($value);\n      $this->value = $value;\n   }}\n\n'

            clase_creada +=f'   public function value(): {variables_primitivas[indice]}\n   {{\n'
            clase_creada +=f'      return $this->value = $value;\n   }}\n\n}}'

            output_folder_path = f'./api/Core/{core_folder}/{class_name}/Domain/ValueObject'
            if not os.path.exists(output_folder_path):
                os.makedirs(output_folder_path)

            output_file_path = os.path.join(output_folder_path, f'{variables_clase[indice]}.php')
            with open(output_file_path, 'w') as output_file:
                output_file.write(clase_creada)

#### REPOSITORY
def convert_yii_model_to_repository(file_path, folder_structure, core_folder):
    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace {folder_structure}\\Repository;\n\n'
    clase_creada +=f'interface I{class_name}ReadRepository\n{{\n'
    clase_creada +=f'   public function get($id) : ?{class_name};\n'
    clase_creada +=f'   public function getAll();\n'
    clase_creada +=f'   public function getByCriteria($criteria): ?{class_name};\n}}'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Domain/Repository'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'I{class_name}ReadRepository.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace {folder_structure}\\Repository;\n\n'
    clase_creada +=f'interface I{class_name}WriteRepository\n{{\n'
    clase_creada +=f'   public function create(${class_name}): ?{class_name};\n'
    clase_creada +=f'   public function delete($id): void;\n'
    clase_creada +=f'   public function update($id,${class_name}):?{class_name};\n}}'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Domain/Repository'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'I{class_name}WriteRepository.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

domain_model_content, generated_properties = convert_yii_model_to_domain(file_path, folder_structure,core_folder)
convert_yii_model_to_value_object(file_path, folder_structure,core_folder)
convert_yii_model_to_repository(file_path, folder_structure,core_folder)

###################################################################################################
###################     APLICACION  ###############################################################
###################################################################################################

#### QUERY
def convert_yii_model_to_Query(file_path, folder_structure, core_folder):
    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Application;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\{{\n'
    clase_creada +=f'   {class_name},\n'
    clase_creada +=f'   Repository\\I{class_name}ReadRepository\n'
    clase_creada +=f'}};\n\n'
    clase_creada +=f'final class Get{class_name}\n{{\n\n'
    clase_creada +=f'   public function __invoke(I{class_name}ReadRepository $repository, ${class_name}Id) : ?{class_name}\n   {{\n'
    clase_creada +=f'       return $this->repository->get(${class_name}Id);\n'
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Application/Query'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'Get{class_name}.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Application;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\{{\n'
    clase_creada +=f'   {class_name},\n'
    clase_creada +=f'   Repository\\I{class_name}ReadRepository\n'
    clase_creada +=f'}};\n\n'
    clase_creada +=f'final class GetAll{class_name}\n{{\n\n'
    clase_creada +=f'   public function __invoke(I{class_name}ReadRepository $repository) : ?array\n   {{\n'
    clase_creada +=f'       return $this->repository->getAll();\n'
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Application/Query'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'GetAll{class_name}.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Application;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\{{\n'
    clase_creada +=f'   {class_name},\n'
    clase_creada +=f'   Repository\\I{class_name}ReadRepository\n'
    clase_creada +=f'}};\n\n'
    clase_creada +=f'final class Get{class_name}ByCriteria\n{{\n\n'
    clase_creada +=f'   public function __invoke(I{class_name}ReadRepository $repository, $criteria) : ?array\n   {{\n'
    clase_creada +=f'       return $this->repository->getByCriteria($criteria);\n'
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Application/Query'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'Get{class_name}ByCriteria.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

#### DTO
def convert_yii_model_to_Dto(file_path, folder_structure, core_folder):
    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Application\\DTO;\n\n'
    clase_creada +=f'class {class_name}CreateDTO\n{{\n'
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0 :
            clase_creada += f"  public {variables_primitivas[indice]} ${nombre_variable[indice]};\n"
        else:
            clase_creada += f"  //insertar Dto de {nombre_variable[indice]} si corresponde\n" 
    clase_creada +=f'\n'
    clase_creada +=f'  public function __construct(\n'
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0 :
            clase_creada += f"      {variables_primitivas[indice]} ${nombre_variable[indice]},\n"
    clase_creada +=f'   )\n   {{\n'
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0 :
            clase_creada += f"      $this->{nombre_variable[indice]} = ${nombre_variable[indice]};\n"

    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Application/DTO'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'{class_name}CreateDTO.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

#### COMMAND
def convert_yii_model_to_Command(file_path, folder_structure, core_folder):
    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Application;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\{{\n'
    clase_creada +=f'   {class_name},\n'
    clase_creada +=f'   Repository\\I{class_name}WriteRepository\n'
    clase_creada +=f'}};\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Application\\DTO\\{class_name}CreateDTO;\n'
    clase_creada +=f'use Ramsey\\Uuid\\Uuid;\n\n'
    clase_creada +=f'final class Create{class_name}\n{{\n\n'
    clase_creada +=f'   public function __invoke({class_name}CreateDTO ${class_name}DTO, I{class_name}WriteRepository $repository)   \n   {{\n'
    clase_creada +=f"       return $repository->create(${class_name}DTO);\n"
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Application/Command'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'Create{class_name}.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Application;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\{{\n'
    clase_creada +=f'   {class_name},\n'
    clase_creada +=f'   Repository\\I{class_name}WriteRepository\n'
    clase_creada +=f'}};\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Application\\DTO\\{class_name}CreateDTO;\n'
    clase_creada +=f'use Ramsey\\Uuid\\Uuid;\n\n'
    clase_creada +=f'final class Update{class_name}\n{{\n\n'
    clase_creada +=f'   public function __invoke({class_name}CreateDTO ${class_name}DTO, I{class_name}WriteRepository $repository)   {{\n'
    clase_creada +=f"       //$arr = [];\n"
    clase_creada +=f"       //$arr['id'] = Uuid::uuid4()->toString();\n"
    clase_creada +=f"       //$arr['nickname'] = $avatarDTO->nickname;\n"
    clase_creada +=f"       //$arr['message'] = $avatarDTO->message;\n"
    clase_creada +=f"       //return $repository->create($arr);\n"
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Application/Command'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'Update{class_name}.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)


    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Application;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\{{\n'
    clase_creada +=f'   {class_name},\n'
    clase_creada +=f'   Repository\\I{class_name}WriteRepository\n'
    clase_creada +=f'}};\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Application\\DTO\\{class_name}CreateDTO;\n'
    clase_creada +=f'use Ramsey\\Uuid\\Uuid;\n\n'
    clase_creada +=f'final class Delete{class_name}\n{{\n\n'
    clase_creada +=f'   public function __invoke($id, I{class_name}WriteRepository $repository)   {{\n'
    clase_creada +=f"       //$arr = [];\n"
    clase_creada +=f"       //$arr['id'] = Uuid::uuid4()->toString();\n"
    clase_creada +=f"       //$arr['nickname'] = $avatarDTO->nickname;\n"
    clase_creada +=f"       //$arr['message'] = $avatarDTO->message;\n"
    clase_creada +=f"       //return $repository->create($arr);\n"
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Application/Command'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'Delete{class_name}.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)


convert_yii_model_to_Query(file_path, folder_structure,core_folder)
convert_yii_model_to_Dto(file_path, folder_structure,core_folder)
convert_yii_model_to_Command(file_path, folder_structure,core_folder)

###################################################################################################
###################     INFRASTRUCTURE  ###############################################################
###################################################################################################

#### QUERY
def convert_yii_model_to_persistence(file_path, folder_structure, core_folder):
    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Infrastructure\\Persistence\\ActiveRecord;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\{{\n'
    clase_creada +=f'   {class_name},\n'
    clase_creada +=f'   Repository\\I{class_name}WriteRepository\n'
    clase_creada +=f'}};\n\n'
    clase_creada +=f'use common\\models\\{class_name} as Model;\n\n'
    clase_creada +=f'class {class_name}RepositoryActiveRecord implements I{class_name}WriteRepository\n{{\n\n'
    clase_creada +=f'   public function create($arr) : {class_name}\n   {{\n'
    clase_creada +=f'       $model = new Model();\n'
    clase_creada +=f'       $model->attributes = $arr;\n'
    clase_creada +=f'       if ($model->save()) return {class_name}::fromPrimitives(...$model->attributes);\n'
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Infrastructure/Persistence/ActiveRecord'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'{class_name}RepositoryActiveRecord.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

def convert_yii_model_to_Controllers(file_path, folder_structure, core_folder):
    clase_creada =f'<?php\n\ndeclare(strict_types=1);\n\n'
    clase_creada +=f'namespace api\\Core\\{core_folder}\\{class_name}\\Infrastructure\\Controller\\Api\\Write;\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\Repository\\I{class_name}WriteRepository;\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Application\\Command\\Create{class_name};\n\n'
    clase_creada +=f'use api\\Core\\{core_folder}\\{class_name}\\Infrastructure\\Persistence\\ActiveRecord\\{class_name}RepositoryActiveRecord;\n\n'
    clase_creada +=f'use yii\\web\\Controller;\n'
    clase_creada +=f'use yii\\web\\NotFoundHttpException;\n'
    clase_creada +=f'use yii\\filters\\VerbFilter;\n'
    clase_creada +=f'use Ramsey\\Uuid\\Uuid;\n'
    clase_creada +=f'use yii\\helpers\\Json;\n'
    clase_creada +=f'use yii\\web\\Response;\n'
    clase_creada +=f'use Yii;\n'
    clase_creada +=f'class Create{class_name}Controller\n{{\n\n'
    clase_creada +=f'   private Create{class_name} $handler;\n\n'    
    clase_creada +=f'   public function __construct(Create{class_name} $handler, I{class_name}WriteRepository $repository)\n   {{\n'
    clase_creada +=f'       $this->handler = $handler;\n'
    clase_creada +=f'       $this->repository = $repository;\n'
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'   public function __invoke()\n   {{\n'
    clase_creada +=f'       $obj = ($this->handler)();\n'
    clase_creada +=f'       Yii::$app->response->format = Response::FORMAT_JSON;\n'
    clase_creada +=f'       Yii::$app->response->data = $obj->toPrimitives();\n'
    clase_creada +=f'       return Yii::$app->response;\n'
    clase_creada +=f'   }}\n\n'
    clase_creada +=f'}}\n\n'

    output_folder_path = f'./api/Core/{core_folder}/{class_name}/Infrastructure/Controller/Api/Write'
    if not os.path.exists(output_folder_path):
        os.makedirs(output_folder_path)

    output_file_path = os.path.join(output_folder_path, f'Create{class_name}Controller.php')
    with open(output_file_path, 'w') as output_file:
        output_file.write(clase_creada)

convert_yii_model_to_Controllers(file_path, folder_structure,core_folder)
convert_yii_model_to_persistence(file_path, folder_structure,core_folder)