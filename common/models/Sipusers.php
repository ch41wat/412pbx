<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sipusers".
 *
 * @property integer $id
 * @property string $name
 * @property string $deny
 * @property string $secret
 * @property string $dtmfmode
 * @property string $canreinvite
 * @property string $context
 * @property string $host
 * @property string $type
 * @property string $nat
 * @property string $port
 * @property string $qualify
 * @property integer $callgroup
 * @property integer $pickupgroup
 * @property string $mailbox
 * @property string $permit
 * @property string $callerid
 * @property string $callcounter
 * @property string $faxdetect
 */
class Sipusers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sipusers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'secret', 'canreinvite', 'context', 'type', 'nat', 'qualify', 'callgroup', 'pickupgroup', 'mailbox', 'callerid', 'callcounter', 'faxdetect'], 'required'],
            [['canreinvite', 'type', 'nat', 'qualify', 'callcounter', 'faxdetect'], 'string'],
            [['callgroup', 'pickupgroup'], 'integer'],
            [['name', 'port', 'mailbox'], 'string', 'max' => 10],
            [['deny'], 'string', 'max' => 80],
            [['secret'], 'string', 'max' => 20],
            [['dtmfmode', 'host', 'callerid'], 'string', 'max' => 50],
            [['context', 'permit'], 'string', 'max' => 100],
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
            'deny' => 'Deny',
            'secret' => 'Secret',
            'dtmfmode' => 'Dtmfmode',
            'canreinvite' => 'Canreinvite',
            'context' => 'Context',
            'host' => 'Host',
            'type' => 'Type',
            'nat' => 'Nat',
            'port' => 'Port',
            'qualify' => 'Qualify',
            'callgroup' => 'Callgroup',
            'pickupgroup' => 'Pickupgroup',
            'mailbox' => 'Mailbox',
            'permit' => 'Permit',
            'callerid' => 'Callerid',
            'callcounter' => 'Callcounter',
            'faxdetect' => 'Faxdetect',
        ];
    }
}
