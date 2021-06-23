<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JournalRevisionOtFile;

/**
 * JournalRevisionOtFileSearch represents the model behind the search form of `backend\models\JournalRevisionOtFile`.
 */
class JournalRevisionOtFileSearch extends JournalRevisionOtFile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'journal_revision_ot_id'], 'integer'],
            [['file', 'date_upload', 'title'], 'safe'],
            [['type'], 'boolean'],
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
        $query = JournalRevisionOtFile::find();

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
            'journal_revision_ot_id' => $this->journal_revision_ot_id,
            'date_upload' => $this->date_upload,
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['ilike', 'file', $this->file])
            ->andFilterWhere(['ilike', 'title', $this->title]);

        return $dataProvider;
    }
}
