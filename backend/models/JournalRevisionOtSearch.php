<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JournalRevisionOt;

/**
 * JournalRevisionOtSearch represents the model behind the search form of `backend\models\JournalRevisionOt`.
 */
class JournalRevisionOtSearch extends JournalRevisionOt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'subdivision_id', 'revisor', 'type', 'result', 'rev_user_id', 'first_kom_user_id', 'second_kom_user_id', 'organization_id'], 'integer'],
            [['date_create', 'date_rev', 'date_time', 'date_finish', 'time_rev'], 'safe'],
            [['status', 'upload'], 'boolean'],
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
        $query = JournalRevisionOt::find();

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
            'date_create' => $this->date_create,
            'station_id' => $this->station_id,
            'subdivision_id' => $this->subdivision_id,
            'date_rev' => $this->date_rev,
            'date_time' => $this->date_time,
            'date_finish' => $this->date_finish,
            'status' => $this->status,
            'revisor' => $this->revisor,
            'type' => $this->type,
            'upload' => $this->upload,
            'result' => $this->result,
            'rev_user_id' => $this->rev_user_id,
            'first_kom_user_id' => $this->first_kom_user_id,
            'second_kom_user_id' => $this->second_kom_user_id,
            'time_rev' => $this->time_rev,
            'organization_id' => $this->organization_id,
        ]);

        return $dataProvider;
    }
}
