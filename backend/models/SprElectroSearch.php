<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SprElectro;

/**
 * SprElectroSearch represents the model behind the search form of `backend\models\SprElectro`.
 */
class SprElectroSearch extends SprElectro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subdivision_id', 'spr_electro_type_id', 'spr_electro_obj_id', 'fider_type', 'spr_electro_trans_id', 'organization_id'], 'integer'],
            [['place', 'number'], 'safe'],
            [['active'], 'boolean'],
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
        $query = SprElectro::find();

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
            'id' => $this->id,
            'subdivision_id' => $this->subdivision_id,
            'spr_electro_type_id' => $this->spr_electro_type_id,
            'spr_electro_obj_id' => $this->spr_electro_obj_id,
            'fider_type' => $this->fider_type,
            'spr_electro_trans_id' => $this->spr_electro_trans_id,
            'organization_id' => $this->organization_id,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['ilike', 'place', $this->place])
            ->andFilterWhere(['ilike', 'number', $this->number]);

        return $dataProvider;
    }
}
