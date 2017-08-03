<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sip_trunk".
 *
 * @property integer $id
 * @property string $name
 * @property string $host
 * @property string $username
 * @property string $secret
 * @property string $type
 * @property string $qualify
 * @property string $fromuser
 * @property string $dtmfmode
 * @property string $insecure
 * @property string $callerid
 * @property string $context
 * @property string $allow
 */
class siptrunk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sip_trunk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'qualify', 'dtmfmode', 'insecure'], 'string'],
            [['name', 'host', 'username', 'secret', 'fromuser', 'context', 'allow'], 'string', 'max' => 100],
            [['callerid'], 'string', 'max' => 20],
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
            'host' => 'Host',
            'username' => 'Username',
            'secret' => 'Secret',
            'type' => 'Type',
            'qualify' => 'Qualify',
            'fromuser' => 'Fromuser',
            'dtmfmode' => 'Dtmfmode',
            'insecure' => 'Insecure',
            'callerid' => 'Callerid',
            'context' => 'Context',
            'allow' => 'Allow',
        ];
    }
}
