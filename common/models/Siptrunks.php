<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siptrunks".
 *
 * @property integer $id
 * @property string $name
 * @property string $disallow
 * @property string $host
 * @property string $type
 * @property string $port
 * @property string $insecure
 * @property string $allow
 * @property string $dtmfmode
 * @property string $qualify
 * @property integer $rtptimeout
 * @property integer $rtpholdtimeout
 * @property string $context
 */
class Siptrunks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siptrunks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type', 'qualify', 'context'], 'required'],
            [['type', 'qualify'], 'string'],
            [['rtptimeout', 'rtpholdtimeout'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['disallow', 'port'], 'string', 'max' => 10],
            [['host', 'insecure', 'allow', 'dtmfmode', 'context'], 'string', 'max' => 50],
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
            'disallow' => 'Disallow',
            'host' => 'Host',
            'type' => 'Type',
            'port' => 'Port',
            'insecure' => 'Insecure',
            'allow' => 'Allow',
            'dtmfmode' => 'Dtmfmode',
            'qualify' => 'Qualify',
            'rtptimeout' => 'Rtptimeout',
            'rtpholdtimeout' => 'Rtpholdtimeout',
            'context' => 'Context',
        ];
    }
}
