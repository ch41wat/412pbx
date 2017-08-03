<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "queue_member".
 *
 * @property string $uniqueid
 * @property string $membername
 * @property string $queue_name
 * @property string $interface
 * @property integer $penalty
 * @property integer $paused
 */
class queueMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'queue_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['penalty', 'paused'], 'integer'],
            [['membername'], 'string', 'max' => 40],
            [['queue_name', 'interface'], 'string', 'max' => 128],
            [['queue_name', 'interface'], 'unique', 'targetAttribute' => ['queue_name', 'interface'], 'message' => 'The combination of Queue Name and Interface has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uniqueid' => 'Uniqueid',
            'membername' => 'Membername',
            'queue_name' => 'Queue Name',
            'interface' => 'Interface',
            'penalty' => 'Penalty',
            'paused' => 'Paused',
        ];
    }
}
