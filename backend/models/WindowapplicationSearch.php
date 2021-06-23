<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Windowapplication;

/**
 * WindowapplicationSearch represents the model behind the search form of `backend\models\Windowapplication`.
 */
class WindowapplicationSearch extends Windowapplication
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'way', 'km', 'picket'], 'integer'],
            [['dnc', 'date', 'type', 'fio_main', 'fio_bd', 'description', 'fio_shchd'], 'safe'],
            [['shutdown', 'representative', 'sign', 'shutdown_voltage', 'written'], 'boolean'],
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
        $query = Windowapplication::find();

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
            'date' => $this->date,
            'station_id' => $this->station_id,
            'way' => $this->way,
            'km' => $this->km,
            'picket' => $this->picket,
            'shutdown' => $this->shutdown,
            'representative' => $this->representative,
            'sign' => $this->sign,
            'shutdown_voltage' => $this->shutdown_voltage,
            'written' => $this->written,
        ]);

        $query->andFilterWhere(['ilike', 'dnc', $this->dnc])
            ->andFilterWhere(['ilike', 'type', $this->type])
            ->andFilterWhere(['ilike', 'fio_main', $this->fio_main])
            ->andFilterWhere(['ilike', 'fio_bd', $this->fio_bd])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'fio_shchd', $this->fio_shchd]);

        return $dataProvider;
    }
}
