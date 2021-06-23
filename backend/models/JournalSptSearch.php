<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JournalSpt;

/**
 * JournalSptSearch represents the model behind the search form of `backend\models\JournalSpt`.
 */
class JournalSptSearch extends JournalSpt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'spr_spt_id', 'organization_id'], 'integer'],
            [['date_create', 'time_create', 'character', 'reported', 'date_to', 'time_to', 'pers_to', 'date_finish', 'time_finish', 'pers_finish', 'description', 'status', 'shd_finish'], 'safe'],
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
        $query = JournalSpt::find();

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
            'time_create' => $this->time_create,
            'spr_spt_id' => $this->spr_spt_id,
            'date_to' => $this->date_to,
            'time_to' => $this->time_to,
            'date_finish' => $this->date_finish,
            'time_finish' => $this->time_finish,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'character', $this->character])
            ->andFilterWhere(['ilike', 'reported', $this->reported])
            ->andFilterWhere(['ilike', 'pers_to', $this->pers_to])
            ->andFilterWhere(['ilike', 'pers_finish', $this->pers_finish])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'shd_finish', $this->shd_finish]);

        return $dataProvider;
    }
}
