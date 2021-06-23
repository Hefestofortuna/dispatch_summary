<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JournalSiz;

/**
 * JournalSizSearch represents the model behind the search form of `backend\models\JournalSiz`.
 */
class JournalSizSearch extends JournalSiz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'subdivision_id', 'organization_id'], 'integer'],
            [['num', 'putdate', 'name'], 'safe'],
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
        $query = JournalSiz::find();

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
            'subdivision_id' => $this->subdivision_id,
            'putdate' => $this->putdate,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'num', $this->num])
            ->andFilterWhere(['ilike', 'name', $this->name]);

        return $dataProvider;
    }
}
