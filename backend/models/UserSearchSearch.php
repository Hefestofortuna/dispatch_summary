<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UserSearch;

/**
 * UserSearchSearch represents the model behind the search form of `backend\models\UserSearch`.
 */
class UserSearchSearch extends UserSearch
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'subdivision_id', 'organization_id', 'post_id'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'name', 'description', 'verification_token', 'phone'], 'safe'],
            [['is_admin', 'reinstruction'], 'boolean'],
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
        $query = UserSearch::find();

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'is_admin' => $this->is_admin,
            'subdivision_id' => $this->subdivision_id,
            'organization_id' => $this->organization_id,
            'post_id' => $this->post_id,
            'reinstruction' => $this->reinstruction,
        ]);

        $query->andFilterWhere(['ilike', 'username', $this->username])
            ->andFilterWhere(['ilike', 'auth_key', $this->auth_key])
            ->andFilterWhere(['ilike', 'password_hash', $this->password_hash])
            ->andFilterWhere(['ilike', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'verification_token', $this->verification_token])
            ->andFilterWhere(['ilike', 'phone', $this->phone]);

        return $dataProvider;
    }
}
