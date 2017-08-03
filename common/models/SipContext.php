<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sip_context".
 *
 * @property integer $id
 * @property string $name
 * @property string $services
 */
class SipContext extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sip_context';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'services'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['services'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'services' => 'Services',
        ];
    }
}
