<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pscontacts;

/**
 * PscontactsSearch represents the model behind the search form of `app\models\Pscontacts`.
 */
class PscontactsSearch extends Pscontacts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'uri', 'outbound_proxy', 'path', 'user_agent', 'reg_server', 'authenticate_qualify', 'via_addr', 'call_id', 'endpoint', 'prune_on_boot'], 'safe'],
            [['expiration_time', 'qualify_frequency', 'via_port'], 'integer'],
            [['qualify_timeout'], 'number'],
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
        $query = Pscontacts::find();

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
            'expiration_time' => $this->expiration_time,
            'qualify_frequency' => $this->qualify_frequency,
            'qualify_timeout' => $this->qualify_timeout,
            'via_port' => $this->via_port,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'uri', $this->uri])
            ->andFilterWhere(['like', 'outbound_proxy', $this->outbound_proxy])
            ->andFilterWhere(['like', 'path', $this->path])
            ->andFilterWhere(['like', 'user_agent', $this->user_agent])
            ->andFilterWhere(['like', 'reg_server', $this->reg_server])
            ->andFilterWhere(['like', 'authenticate_qualify', $this->authenticate_qualify])
            ->andFilterWhere(['like', 'via_addr', $this->via_addr])
            ->andFilterWhere(['like', 'call_id', $this->call_id])
            ->andFilterWhere(['like', 'endpoint', $this->endpoint])
            ->andFilterWhere(['like', 'prune_on_boot', $this->prune_on_boot]);

        return $dataProvider;
    }
}
