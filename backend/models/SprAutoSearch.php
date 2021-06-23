<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SprAuto;

/**
 * SprAutoSearch represents the model behind the search form of `backend\models\SprAuto`.
 */
class SprAutoSearch extends SprAuto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'organization_id', 'ts_reestr', 'ts_class', 'fuel'], 'integer'],
            [['brand', 'number', 'date_check'], 'safe'],
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
        $query = SprAuto::find();

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
            'organization_id' => $this->organization_id,
            'date_check' => $this->date_check,
            'ts_reestr' => $this->ts_reestr,
            'ts_class' => $this->ts_class,
            'fuel' => $this->fuel,
        ]);

        $query->andFilterWhere(['ilike', 'brand', $this->brand])
            ->andFilterWhere(['ilike', 'number', $this->number]);

        return $dataProvider;
    }
}
