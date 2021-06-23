<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dga;

/**
 * DgaSearch represents the model behind the search form of `backend\models\Dga`.
 */
class DgaSearch extends Dga
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kol', 'station_id', 'user_id', 'underPressure', 'organization_id', 'moto'], 'integer'],
            [['putdate', 'time_on', 'time_off', 'description'], 'safe'],
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
        $query = Dga::find();

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
            'time_on' => $this->time_on,
            'time_off' => $this->time_off,
            'kol' => $this->kol,
            'station_id' => $this->station_id,
            'user_id' => $this->user_id,
            'underPressure' => $this->underPressure,
            'organization_id' => $this->organization_id,
            'moto' => $this->moto,
        ]);

        $query->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
