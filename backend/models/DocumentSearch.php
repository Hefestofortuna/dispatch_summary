<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Document;

/**
 * DocumentSearch represents the model behind the search form of `backend\models\Document`.
 */
class DocumentSearch extends Document
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'category_id', 'otdel_id', 'target'], 'integer'],
            [['title', 'file', 'date_upload', 'date_modify'], 'safe'],
            [['isNews'], 'boolean'],
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
        $query = Document::find();

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
            'date_upload' => $this->date_upload,
            'date_modify' => $this->date_modify,
            'isNews' => $this->isNews,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'otdel_id' => $this->otdel_id,
            'target' => $this->target,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'file', $this->file]);

        return $dataProvider;
    }
}
