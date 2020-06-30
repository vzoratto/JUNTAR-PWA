<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ModalidadEvento;

/**
 * ModalidadEventoSearch represents the model behind the search form of `backend\models\ModalidadEvento`.
 */
class ModalidadEventoSearch extends ModalidadEvento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idModalidadEvento'], 'integer'],
            [['descripcionModalidad'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ModalidadEvento::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idModalidadEvento' => $this->idModalidadEvento,
        ]);

        $query->andFilterWhere(['like', 'descripcionModalidad', $this->descripcionModalidad]);

        return $dataProvider;
    }
}
