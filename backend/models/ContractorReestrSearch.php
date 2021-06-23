<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ContractorReestr;

/**
 * ContractorReestrSearch represents the model behind the search form of `backend\models\ContractorReestr`.
 */
class ContractorReestrSearch extends ContractorReestr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'contractor_id', 'station_id', 'organization_id'], 'integer'],
            [['date_start', 'date_finish', 'notice', 'ppr', 'act_dopusk', 'naryad_dopusk', 'act_kabel', 'otv_isp_info', 'otv_ruk_info', 'nadzor_doc', 'nadrzor_otv', 'title', 'haracter'], 'safe'],
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
        $query = ContractorReestr::find();

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
            'contractor_id' => $this->contractor_id,
            'station_id' => $this->station_id,
            'date_start' => $this->date_start,
            'date_finish' => $this->date_finish,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'notice', $this->notice])
            ->andFilterWhere(['ilike', 'ppr', $this->ppr])
            ->andFilterWhere(['ilike', 'act_dopusk', $this->act_dopusk])
            ->andFilterWhere(['ilike', 'naryad_dopusk', $this->naryad_dopusk])
            ->andFilterWhere(['ilike', 'act_kabel', $this->act_kabel])
            ->andFilterWhere(['ilike', 'otv_isp_info', $this->otv_isp_info])
            ->andFilterWhere(['ilike', 'otv_ruk_info', $this->otv_ruk_info])
            ->andFilterWhere(['ilike', 'nadzor_doc', $this->nadzor_doc])
            ->andFilterWhere(['ilike', 'nadrzor_otv', $this->nadrzor_otv])
            ->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'haracter', $this->haracter]);

        return $dataProvider;
    }
}
