<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%area}}".
 *
 * @property int $id
 * @property string $area
 * @property string|null $titulo
 * @property string|null $cargo
 *
 * @property ActaUtilizada[] $actaUtilizadas
 * @property OrdenInspeccion[] $ordenInspeccions
 * @property Usuarios[] $usuarios
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%area}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area'], 'required'],
            [['area'], 'string', 'max' => 50],
            [['titulo', 'cargo'], 'string', 'max' => 100],
            [['area'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area' => 'Area',
            'titulo' => 'Titulo',
            'cargo' => 'Cargo',
        ];
    }

    /**
     * Gets query for [[ActaUtilizadas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaUtilizadaQuery
     */
    public function getActaUtilizadas()
    {
        return $this->hasMany(ActaUtilizada::class, ['areas_id' => 'id']);
    }

    /**
     * Gets query for [[OrdenInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrdenInspeccionQuery
     */
    public function getOrdenInspeccions()
    {
        return $this->hasMany(OrdenInspeccion::class, ['area_id' => 'id']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['idArea' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AreaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AreaQuery(get_called_class());
    }
}
