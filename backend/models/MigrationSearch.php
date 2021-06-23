<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Migration;

/**
 * MigrationSearch represents the model behind the search form of `backend\models\Migration`.
 */
class MigrationSearch extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['version'], 'safe'],
            [['apply_time'], 'integer'],
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
        $query = Migration::find();

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
            'apply_time' => $this->apply_time,
        ]);

        $query->andFilterWhere(['ilike', 'version', $this->version]);

        return $dataProvider;
    }
}
