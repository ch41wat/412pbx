<?php

namespace backend\modules\extension;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Extensions;

/**
 * ExtensionSearch represents the model behind the search form about `common\models\Extensions`.
 */
class ExtensionSearch extends Extensions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'priority'], 'integer'],
            [['context', 'exten', 'app', 'appdata'], 'safe'],
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
        $query = Extensions::find();

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
            'priority' => $this->priority,
        ]);

        $query->andFilterWhere(['like', 'context', $this->context])
            ->andFilterWhere(['like', 'exten', $this->exten])
            ->andFilterWhere(['like', 'app', $this->app])
            ->andFilterWhere(['like', 'appdata', $this->appdata]);

        return $dataProvider;
    }
}
