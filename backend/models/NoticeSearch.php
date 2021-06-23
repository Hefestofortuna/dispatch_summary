<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Notice;

/**
 * NoticeSearch represents the model behind the search form of `backend\models\Notice`.
 */
class NoticeSearch extends Notice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'subdivision_id', 'organization_id'], 'integer'],
            [['give', 'text', 'putdate'], 'safe'],
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
        $query = Notice::find();

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
            'user_id' => $this->user_id,
            'putdate' => $this->putdate,
            'subdivision_id' => $this->subdivision_id,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'give', $this->give])
            ->andFilterWhere(['ilike', 'text', $this->text]);

        return $dataProvider;
    }
}
