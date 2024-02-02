import re

def convert_yii_model_to_domain(yii_model):
    # Reemplaza el espacio de nombres
    domain_model = yii_model.replace('namespace common\\models;', 'namespace api\\Core\\Conquer\\Land\\Domain;')

    # Elimina comentarios
    domain_model = remove_comments(domain_model)

    # Encuentra el nombre de la clase y extiende AggregateRoot
    class_match = re.search(r'class\s+(\w+)\s+extends\s+\\yii\\db\\ActiveRecord', domain_model)    
    if class_match:
        class_name = class_match.group(1)
        domain_model = domain_model.replace(f'class {class_name} extends \\yii\\db\\ActiveRecord', f'final class {class_name} extends AggregateRoot')
    # Reemplaza el nombre de la tabla
    domain_model = domain_model.replace("return '{{acta}}';", "return 'conquer_land';")

    # Reemplaza las propiedades
    domain_model = re.sub(r'public (\w+) \$([\w_]+);', r'private \1 $\2;', domain_model)

    # Elimina las anotaciones ORM
    domain_model = re.sub(r' \* @property .+\n', '', domain_model)

    # Elimina las funciones no necesarias
    domain_model = re.sub(r'public function (rules|attributeLabels|getActaAsignacions|getActaUtilizada|find)\(.+?\}\n', '', domain_model)

    # Reemplaza el constructor
    domain_model = re.sub(r'public function __construct\((.+?)\)\s+{', r'public function __construct(\1) {', domain_model)

    # Reemplaza find
    domain_model = re.sub(r'public static function find\(\)\s+{', 'public static function find(): self', domain_model)

    return domain_model

yii_model_content = '''
namespace common\\models;

use Yii;

/**
 *
 * @property int $id
 * @property int|null $id_inspeccion
 * @property int|null $estado_id
 * @property string $Serie
 * @property int $Numero
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 * @property string $NumeroGedoFormulario
 * @property string $FechaDeCreacionGedoFormulario
 * @property string $NumeroActaGedoFormulario
 *
 * @property ActaAsignacion[] $actaAsignacions
 * @property ActaUtilizada $actaUtilizada
 */
class Acta extends \\yii\\db\\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{acta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_inspeccion', 'estado_id', 'Numero', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['Serie', 'Numero', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador', 'NumeroGedoFormulario', 'FechaDeCreacionGedoFormulario', 'NumeroActaGedoFormulario'], 'required'],
            [['Fecha_Creado', 'Fecha_Modificado', 'FechaDeCreacionGedoFormulario'], 'safe'],
            [['Serie'], 'string', 'max' => 2],
            [['NumeroGedoFormulario'], 'string', 'max' => 100],
            [['NumeroActaGedoFormulario'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_inspeccion' => 'Id Inspeccion',
            'estado_id' => 'Estado ID',
            'Serie' => 'Serie',
            'Numero' => 'Numero',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
            'NumeroGedoFormulario' => 'Numero Gedo Formulario',
            'FechaDeCreacionGedoFormulario' => 'Fecha De Creacion Gedo Formulario',
            'NumeroActaGedoFormulario' => 'Numero Acta Gedo Formulario',
        ];
    }

    /**
     * Gets query for [[ActaAsignacions]].
     *
     * @return \\yii\\db\\ActiveQuery|\\common\\models\\query\\ActaAsignacionQuery
     */
    public function getActaAsignacions()
    {
        return $this->hasMany(ActaAsignacion::class, ['acta_id' => 'id']);
    }

    /**
     * Gets query for [[ActaUtilizada]].
     *
     * @return \\yii\\db\\ActiveQuery|\\common\\models\\query\\ActaUtilizadaQuery
     */
    public function getActaUtilizada()
    {
        return $this->hasOne(ActaUtilizada::class, ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \\common\\models\\query\\ActaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \\common\\models\\query\\ActaQuery(get_called_class());
    }
}
'''

def remove_comments(yii_model):
    # Elimina comentarios del estilo /** ... */
    yii_model = re.sub(r'/\*\*.*?\*/', '', yii_model, flags=re.DOTALL)

    # Elimina comentarios del estilo // ...
    yii_model = re.sub(r'//.*', '', yii_model)

    return yii_model

domain_model_content = convert_yii_model_to_domain(yii_model_content)

print(domain_model_content)