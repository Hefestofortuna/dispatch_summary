<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JournalIzol;

/**
 * JournalIzolSearch represents the model behind the search form of `backend\models\JournalIzol`.
 */
class JournalIzolSearch extends JournalIzol
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'shns_user_id', 'organization_id'], 'integer'],
            [['place', 'mark', 'date_create', 'description', 'date_finish', 'step', 'date_next'], 'safe'],
            [['r_izol_start', 'r_izol_end'], 'number'],
            [['status', 'isDevice'], 'boolean'],
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
        $query = JournalIzol::find();

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
            'station_id' => $this->station_id,
            'date_create' => $this->date_create,
            'r_izol_start' => $this->r_izol_start,
            'shns_user_id' => $this->shns_user_id,
            'date_finish' => $this->date_finish,
            'status' => $this->status,
            'r_izol_end' => $this->r_izol_end,
            'date_next' => $this->date_next,
            'isDevice' => $this->isDevice,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'place', $this->place])
            ->andFilterWhere(['ilike', 'mark', $this->mark])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'step', $this->step]);

        return $dataProvider;
    }
}
