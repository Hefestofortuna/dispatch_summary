<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Work;

/**
 * WorkSearch represents the model behind the search form of `backend\models\Work`.
 */
class WorkSearch extends Work
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category', 'organization_id'], 'integer'],
            [['code', 'doc', 'tkarta', 'text', 'period', 'type'], 'safe'],
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
        $query = Work::find();

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
            'category' => $this->category,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'code', $this->code])
            ->andFilterWhere(['ilike', 'doc', $this->doc])
            ->andFilterWhere(['ilike', 'tkarta', $this->tkarta])
            ->andFilterWhere(['ilike', 'text', $this->text])
            ->andFilterWhere(['ilike', 'period', $this->period])
            ->andFilterWhere(['ilike', 'type', $this->type]);

        return $dataProvider;
    }
}
