<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\File;

/**
 * FileSearch represents the model behind the search form of `backend\models\File`.
 */
class FileSearch extends File
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'news_id'], 'integer'],
            [['filename', 'filepath'], 'safe'],
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
        $query = File::find();

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
            'news_id' => $this->news_id,
        ]);

        $query->andFilterWhere(['ilike', 'filename', $this->filename])
            ->andFilterWhere(['ilike', 'filepath', $this->filepath]);

        return $dataProvider;
    }
}
