<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Psauths;

/**
 * PsauthsSearch represents the model behind the search form of `app\models\Psauths`.
 */
class PsauthsSearch extends Psauths
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'auth_type', 'md5_cred', 'password', 'realm', 'username'], 'safe'],
            [['nonce_lifetime'], 'integer'],
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
        $query = Psauths::find();

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
            'nonce_lifetime' => $this->nonce_lifetime,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'auth_type', $this->auth_type])
            ->andFilterWhere(['like', 'md5_cred', $this->md5_cred])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'realm', $this->realm])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }
}
