<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Msu;

/**
 * MsuSearch represents the model behind the search form of `backend\models\Msu`.
 */
class MsuSearch extends Msu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'switch', 'power_supply', 'msu_num', 'msu_year', 'emsu_usilie_friction_plus', 'emsu_usilie_friction_min', 'organization_id', 'station_id', 'subdivision_id', 'user_id'], 'integer'],
            [['date_setup', 'date_create'], 'safe'],
            [['msu_perevod_plus', 'msu_perevod_min', 'msu_friction_plus', 'msu_friction_min', 'emsu_perevod_plus', 'emsu_perevod_min', 'emsu_friction_plus', 'emsu_friction_min'], 'number'],
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
        $query = Msu::find();

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
            'date_setup' => $this->date_setup,
            'switch' => $this->switch,
            'power_supply' => $this->power_supply,
            'msu_num' => $this->msu_num,
            'msu_year' => $this->msu_year,
            'msu_perevod_plus' => $this->msu_perevod_plus,
            'msu_perevod_min' => $this->msu_perevod_min,
            'msu_friction_plus' => $this->msu_friction_plus,
            'msu_friction_min' => $this->msu_friction_min,
            'emsu_perevod_plus' => $this->emsu_perevod_plus,
            'emsu_perevod_min' => $this->emsu_perevod_min,
            'emsu_friction_plus' => $this->emsu_friction_plus,
            'emsu_friction_min' => $this->emsu_friction_min,
            'emsu_usilie_friction_plus' => $this->emsu_usilie_friction_plus,
            'emsu_usilie_friction_min' => $this->emsu_usilie_friction_min,
            'organization_id' => $this->organization_id,
            'station_id' => $this->station_id,
            'subdivision_id' => $this->subdivision_id,
            'user_id' => $this->user_id,
            'date_create' => $this->date_create,
        ]);

        return $dataProvider;
    }
}
