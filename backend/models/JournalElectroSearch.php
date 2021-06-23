<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JournalElectro;

/**
 * JournalElectroSearch represents the model behind the search form of `backend\models\JournalElectro`.
 */
class JournalElectroSearch extends JournalElectro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'indication', 'user_id', 'spr_electro_id', 'organization_id'], 'integer'],
            [['putdate'], 'safe'],
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
        $query = JournalElectro::find();

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
            'putdate' => $this->putdate,
            'indication' => $this->indication,
            'user_id' => $this->user_id,
            'spr_electro_id' => $this->spr_electro_id,
            'organization_id' => $this->organization_id,
        ]);

        return $dataProvider;
    }
}
