import re

def convert_yii_model_to_domain(file_path, folder_structure):
    # Lee el contenido del archivo PHP
    with open(file_path, 'r') as file:
        yii_model = file.read()

    # Agrega las declaraciones como las primeras dos líneas
    domain_model = "<?php\n" + yii_model
    texto_final = "<?php\ndeclare(strict_types=1);"

    # Reemplaza el espacio de nombres
    namespace_match = re.search(r'namespace (\S+);', domain_model)
    if namespace_match:
        current_namespace = namespace_match.group(1)
        new_namespace = folder_structure.replace('\\', '/')
        domain_model = domain_model.replace(current_namespace, new_namespace)

    # Agrega la línea de uso de Yii
    texto_final += "\n\nuse Yii;"
    
    # Agrega la línea de namespace modificada
    texto_final += f"\n\nnamespace {new_namespace};"

    # Encuentra el nombre de la clase y extiende AggregateRoot
    class_match = re.search(r'class\s+(\w+)\s+extends\s+\\yii\\db\\ActiveRecord', domain_model)    
    if class_match:
        class_name = class_match.group(1)
        domain_model = domain_model.replace(f'class {class_name} extends \\yii\\db\\ActiveRecord', f'final class {class_name} extends AggregateRoot')
        # Agrega la declaración de clase al texto_final
        texto_final += f"\n\nclass {class_name} extends AggregateRoot\n{{\n"

    # Encuentra y reemplaza cada propiedad
    global all_properties
    all_properties = 'public function __construct(\n'
    domain_model = re.sub(r'\@property\s+(\S+)\s+\$(\w+)', convert_property_to_php_syntax, domain_model)
    all_properties += ')\n{}'

    # Adhiere all_properties al texto_final con identación
    indented_properties = indent_code(all_properties, 8)
    texto_final += indented_properties
    
    # Genera el método estático create
    create_method = generate_create_method(all_properties)
    texto_final += create_method

    # Agregar el método fromPrimitives al final del código
    from_primitives_method = generate_from_primitives_method(all_properties)
    texto_final += from_primitives_method


    # Elimina los comentarios
    domain_model = re.sub(r'/\*.*?\*/', '', domain_model, flags=re.DOTALL)  # Elimina comentarios de bloque
    domain_model = re.sub(r'//.*?$', '', domain_model, flags=re.MULTILINE)  # Elimina comentarios de línea

    # Elimina las funciones no necesarias
    domain_model = re.sub(r'public function (rules|attributeLabels|getActaAsignacions|getActaUtilizada|find)\(.+?\}\n', '', domain_model)

    # Reemplaza el constructor
    domain_model = re.sub(r'public function __construct\((.+?)\)\s+{', r'public function __construct(\1) {', domain_model)

    # Reemplaza find
    domain_model = re.sub(r'public static function find\(\)\s+{', 'public static function find(): self', domain_model)

    # Mueve declare(strict_types=1); después de la primera declaración <?php
    domain_model = re.sub(r'(<\?php)\n', r'\1\ndeclare(strict_types=1);\n', domain_model, count=1)


    print(texto_final)
    return texto_final, domain_model

def convert_property_to_php_syntax(match):
    global all_properties
    property_type = match.group(1)
    property_name = match.group(2)

    # Ajustar el tipo según si la variable contiene "id"
    if "id" in property_name.lower():
        converted_type = "UUID"
    else:
        converted_type = property_name

    # Quitar guiones bajos y capitalizar las palabras
    converted_type_cleaned = ''.join(word.capitalize() for word in converted_type.split('_'))

    all_properties += f'private {converted_type_cleaned} ${property_name};\n'
    return f'{converted_type_cleaned} ${property_name};'


def generate_create_method(properties):
    lines = properties.split('\n')[1:-2]  # Elimina la primera y las dos últimas líneas
    create_method = "\n\n    public static function create(\n"
    
    for line in lines:
        if 'private' in line:
            line = line.replace('private', '').strip()
            property_type = line.split(' ')[0].strip()
            property_name = line.split('$')[1].rstrip(';').strip()
            create_method += f'        {property_type} ${property_name},\n'
    
    create_method = create_method.rstrip(',\n')  # Elimina la última coma
    create_method += "\n    ): self \n    {\n        return new self(\n"
    
    for line in lines:
        if 'private' in line:
            property_name = line.split('$')[1].rstrip(';').strip()
            create_method += f'            ${property_name},\n'
    
    create_method = create_method.rstrip(',\n')  # Elimina la última coma
    create_method += "\n        );\n    }\n"
    
    return create_method

def indent_code(code, spaces):
    lines = code.split('\n')
    indented_code = '\n'.join([' ' * spaces + line for line in lines])
    return indented_code

def generate_from_primitives_method(properties):
    lines = properties.split('\n')[1:-2]  # Elimina la primera y las dos últimas líneas
    from_primitives_method = "\n\n    public static function fromPrimitives(\n"
    
    for line in lines:
        if 'private' in line:
            line = line.replace('private', '').strip()
            property_type = line.split(' ')[0].strip()
            property_name = line.split('$')[1].rstrip(';').strip()
            from_primitives_method += f'        {property_type} ${property_name},\n'
    
    from_primitives_method = from_primitives_method.rstrip(',\n')  # Elimina la última coma
    from_primitives_method += "\n    ): self \n    {\n        return new self(\n"
    
    for line in lines:
        if 'private' in line:
            property_name = line.split('$')[1].rstrip(';').strip()
            from_primitives_method += f'            new {property_name}(${property_name}),\n'
    
    from_primitives_method = from_primitives_method.rstrip(',\n')  # Elimina la última coma
    from_primitives_method += "\n        );\n    }\n"
    
    return from_primitives_method

folder_structure = 'api\\Core\\Acta\\Acta\\Domain'
file_path = './common/models/Acta.php'  # Reemplaza con la ruta real de tu archivo PHP

domain_model_content, generated_properties = convert_yii_model_to_domain(file_path, folder_structure)

# Imprime el contenido final
#print("\nGenerated Properties:\n", generated_properties)
