<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OperRaspFile;

/**
 * OperRaspFileSearch represents the model behind the search form of `backend\models\OperRaspFile`.
 */
class OperRaspFileSearch extends OperRaspFile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'oper_rasp_isp_id'], 'integer'],
            [['file', 'putdate'], 'safe'],
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
        $query = OperRaspFile::find();

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
            'oper_rasp_isp_id' => $this->oper_rasp_isp_id,
            'putdate' => $this->putdate,
        ]);

        $query->andFilterWhere(['ilike', 'file', $this->file]);

        return $dataProvider;
    }
}
