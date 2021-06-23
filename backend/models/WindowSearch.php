<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Window;

/**
 * WindowSearch represents the model behind the search form of `backend\models\Window`.
 */
class WindowSearch extends Window
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'transfer_user_id', 'user_id'], 'integer'],
            [['putdate', 'organization', 'work', 'place', 'plan', 'hozed', 'leader', 'spec', 'description'], 'safe'],
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
        $query = Window::find();

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
            'transfer_user_id' => $this->transfer_user_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['ilike', 'organization', $this->organization])
            ->andFilterWhere(['ilike', 'work', $this->work])
            ->andFilterWhere(['ilike', 'place', $this->place])
            ->andFilterWhere(['ilike', 'plan', $this->plan])
            ->andFilterWhere(['ilike', 'hozed', $this->hozed])
            ->andFilterWhere(['ilike', 'leader', $this->leader])
            ->andFilterWhere(['ilike', 'spec', $this->spec])
            ->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
