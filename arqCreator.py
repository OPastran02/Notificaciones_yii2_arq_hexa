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


#### PARAMETROS INICIALES

core_folder='Acta'
folder_structure = 'api\\Core\\Acta\\Acta\\Domain'
file_path = './common/models/Acta.php'  

#### MODELO DOMINIO

def convert_yii_model_to_domain(file_path, folder_structure, core_folder):
    global all_properties
    global variables_clase
    global variables_primitivas
    global nombre_variable
    global esObjeto

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
        texto_final += "\n\nuse Yii;"
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
    create_import = f'use api\\Core\\{core_folder}\\{class_name}\\Domain\\ValueObject\\{{\n'
    for indice, elemento in enumerate(variables_clase):
        if esObjeto[indice] == 0 and variables_clase[indice] != "UUID": 
            create_import += f'    {variables_clase[indice]},\n'
    create_import +="};\n\n"
    create_import +="use api\Shared\Domain\ValueObject\{\n    UUID,\n    NID,\n};"

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

domain_model_content, generated_properties = convert_yii_model_to_domain(file_path, folder_structure,core_folder)
print(variables_clase) 
print(variables_primitivas) 
print(variables_clase) 
print(esObjeto)