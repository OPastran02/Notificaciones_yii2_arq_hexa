<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%direccion_provisoria}}".
 *
 * @property int $id
 * @property int|null $calle_id
 * @property int|null $orden_inspeccion_id
 * @property int $altura
 * @property string|null $piso
 * @property string|null $dpto
 * @property string|null $local
 * @property int $comuna
 * @property float $lon
 * @property float $lat
 * @property string $SMP
 * @property int|null $pMatriz
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 * @property int|null $cmr
 */
class DireccionProvisoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%direccion_provisoria}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calle_id', 'orden_inspeccion_id', 'altura', 'comuna', 'pMatriz', 'Id_Usuario_Creador', 'Id_Usuario_Modificador', 'cmr'], 'integer'],
            [['altura', 'comuna', 'lon', 'lat', 'SMP', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['lon', 'lat'], 'number'],
            [['Fecha_Creado', 'Fecha_Modificado'], 'safe'],
            [['piso', 'dpto', 'local'], 'string', 'max' => 6],
            [['SMP'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'calle_id' => 'Calle ID',
            'orden_inspeccion_id' => 'Orden Inspeccion ID',
            'altura' => 'Altura',
            'piso' => 'Piso',
            'dpto' => 'Dpto',
            'local' => 'Local',
            'comuna' => 'Comuna',
            'lon' => 'Lon',
            'lat' => 'Lat',
            'SMP' => 'Smp',
            'pMatriz' => 'P Matriz',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
            'cmr' => 'Cmr',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DireccionProvisoriaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DireccionProvisoriaQuery(get_called_class());
    }
}
