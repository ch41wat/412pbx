<?php

namespace backend\modules\siptrunks;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siptrunks;

/**
 * SiptrunksSearch represents the model behind the search form about `common\models\Siptrunks`.
 */
class SiptrunksSearch extends Siptrunks
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rtptimeout', 'rtpholdtimeout'], 'integer'],
            [['name', 'disallow', 'host', 'type', 'port', 'insecure', 'allow', 'dtmfmode', 'qualify', 'context'], 'safe'],
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
        $query = Siptrunks::find();

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
            'rtptimeout' => $this->rtptimeout,
            'rtpholdtimeout' => $this->rtpholdtimeout,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'disallow', $this->disallow])
            ->andFilterWhere(['like', 'host', $this->host])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'port', $this->port])
            ->andFilterWhere(['like', 'insecure', $this->insecure])
            ->andFilterWhere(['like', 'allow', $this->allow])
            ->andFilterWhere(['like', 'dtmfmode', $this->dtmfmode])
            ->andFilterWhere(['like', 'qualify', $this->qualify])
            ->andFilterWhere(['like', 'context', $this->context]);

        return $dataProvider;
    }
}
