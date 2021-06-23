<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JournalIzolControl;

/**
 * JournalIzolControlSearch represents the model behind the search form of `backend\models\JournalIzolControl`.
 */
class JournalIzolControlSearch extends JournalIzolControl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'journal_izol_id', 'putdate'], 'integer'],
            [['r_izol'], 'number'],
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
        $query = JournalIzolControl::find();

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
            'journal_izol_id' => $this->journal_izol_id,
            'putdate' => $this->putdate,
            'r_izol' => $this->r_izol,
        ]);

        return $dataProvider;
    }
}
