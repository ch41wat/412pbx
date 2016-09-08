<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agents".
 *
 * @property integer $id
 * @property string $agent_number
 * @property string $password
 * @property string $name
 */
class Agents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agent_number', 'password', 'name'], 'required'],
            [['agent_number', 'password'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agent_number' => 'Agent Number',
            'password' => 'Password',
            'name' => 'Name',
        ];
    }
}
