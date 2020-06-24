<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categoria_evento".
 *
 * @property int $idCategoriaEvento
 * @property string $descripcionCategoria
 *
 * @property Evento[] $eventos
 */
class CategoriaEvento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria_evento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcionCategoria'], 'required'],
            [['descripcionCategoria'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCategoriaEvento' => 'Id Categoria Evento',
            'descripcionCategoria' => 'Descripcion Categoria',
        ];
    }

    /**
     * Gets query for [[Eventos]].
     *
     * @return \yii\db\ActiveQuery|EventoQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Evento::className(), ['idCategoriaEvento' => 'idCategoriaEvento']);
    }

    /**
     * {@inheritdoc}
     * @return CategoriaEventoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoriaEventoQuery(get_called_class());
    }
}