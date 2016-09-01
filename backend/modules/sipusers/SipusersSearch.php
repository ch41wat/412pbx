<?php

namespace backend\modules\sipusers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sipusers;

/**
 * SipusersSearch represents the model behind the search form about `common\models\Sipusers`.
 */
class SipusersSearch extends Sipusers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'callgroup', 'pickupgroup', 'regseconds', 'lastms'], 'integer'],
            [['name', 'deny', 'secret', 'dtmfmode', 'canreinvite', 'context', 'host', 'type', 'nat', 'port', 'qualify', 'mailbox', 'permit', 'callerid', 'callcounter', 'faxdetect', 'callbackextension', 'fullcontact', 'ipaddr', 'useragent'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Sipusers::find();

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
            'callgroup' => $this->callgroup,
            'pickupgroup' => $this->pickupgroup,
            'regseconds' => $this->regseconds,
            'lastms' => $this->lastms,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'deny', $this->deny])
            ->andFilterWhere(['like', 'secret', $this->secret])
            ->andFilterWhere(['like', 'dtmfmode', $this->dtmfmode])
            ->andFilterWhere(['like', 'canreinvite', $this->canreinvite])
            ->andFilterWhere(['like', 'context', $this->context])
            ->andFilterWhere(['like', 'host', $this->host])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'nat', $this->nat])
            ->andFilterWhere(['like', 'port', $this->port])
            ->andFilterWhere(['like', 'qualify', $this->qualify])
            ->andFilterWhere(['like', 'mailbox', $this->mailbox])
            ->andFilterWhere(['like', 'permit', $this->permit])
            ->andFilterWhere(['like', 'callerid', $this->callerid])
            ->andFilterWhere(['like', 'callcounter', $this->callcounter])
            ->andFilterWhere(['like', 'faxdetect', $this->faxdetect])
            ->andFilterWhere(['like', 'callbackextension', $this->callbackextension])
            ->andFilterWhere(['like', 'fullcontact', $this->fullcontact])
            ->andFilterWhere(['like', 'ipaddr', $this->ipaddr])
            ->andFilterWhere(['like', 'useragent', $this->useragent]);

        return $dataProvider;
    }
}
