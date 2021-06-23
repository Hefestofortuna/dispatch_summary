<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SocialInspect;

/**
 * SocialInspectSearch represents the model behind the search form of `backend\models\SocialInspect`.
 */
class SocialInspectSearch extends SocialInspect
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'service_id', 'user_id', 'organization_id'], 'integer'],
            [['date_find', 'comment', 'who_give', 'date_last', 'date_fix', 'who_control'], 'safe'],
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
        $query = SocialInspect::find();

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
            'date_find' => $this->date_find,
            'station_id' => $this->station_id,
            'service_id' => $this->service_id,
            'user_id' => $this->user_id,
            'date_last' => $this->date_last,
            'date_fix' => $this->date_fix,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'comment', $this->comment])
            ->andFilterWhere(['ilike', 'who_give', $this->who_give])
            ->andFilterWhere(['ilike', 'who_control', $this->who_control]);

        return $dataProvider;
    }
}
