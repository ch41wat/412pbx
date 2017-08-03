<?php

namespace common\models;
use common\models\SipContext;
use Yii;
/**
 * This is the model class for table "sipusers".
 *
 * @property integer $id
 * @property string $name
 * @property string $ipaddr
 * @property integer $port
 * @property integer $regseconds
 * @property string $regserver
 * @property string $defaultuser
 * @property string $fullcontact
 * @property string $useragent
 * @property integer $lastms
 * @property string $host
 * @property string $type
 * @property string $context
 * @property string $secret
 * @property string $md5secret
 * @property string $dtmfmode
 * @property string $nat
 * @property string $callgroup
 * @property string $pickupgroup
 * @property string $language
 * @property string $disallow
 * @property string $allow
 * @property string $callerid
 * @property string $videosupport
 * @property integer $maxcallbitrate
 * @property string $mailbox
 * @property string $callbackextension
 * @property string $fullname
 * @property string $trunkname
 * @property string $mohinterpret
 * @property string $mohsuggest
 * @property string $hasvoicemail
 * @property integer $calllimit
 * @property string $insecure
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
            [['name', 'regserver', 'insecure'], 'required'],
            [['port', 'regseconds', 'lastms', 'maxcallbitrate', 'calllimit'], 'integer'],
            [['type', 'dtmfmode', 'nat', 'videosupport', 'hasvoicemail', 'insecure'], 'string'],
            [['name', 'defaultuser'], 'string', 'max' => 10],
            [['ipaddr'], 'string', 'max' => 15],
            [['regserver', 'useragent'], 'string', 'max' => 20],
            [['fullcontact'], 'string', 'max' => 35],
            [['host', 'context', 'secret', 'md5secret', 'callgroup', 'pickupgroup', 'language', 'disallow', 'allow', 'callerid', 'mailbox', 'callbackextension', 'fullname', 'trunkname', 'mohinterpret', 'mohsuggest'], 'string', 'max' => 40],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Number',
            'ipaddr' => 'IP Address',
            'port' => 'Port',
            'regseconds' => 'Status',
            'regserver' => 'Regserver',
            'defaultuser' => 'Defaultuser',
            'fullcontact' => 'Fullcontact',
            'useragent' => 'Registered By',
            'lastms' => 'Lastms',
            'host' => 'Host',
            'type' => 'Type',
            'context' => 'Context',
            'secret' => 'Secret',
            'md5secret' => 'Md5secret',
            'dtmfmode' => 'Dtmfmode',
            'nat' => 'Nat',
            'callgroup' => 'Callgroup',
            'pickupgroup' => 'Pickupgroup',
            'language' => 'Language',
            'disallow' => 'Disallow',
            'allow' => 'Allow',
            'callerid' => 'Callerid',
            'videosupport' => 'Videosupport',
            'maxcallbitrate' => 'Maxcallbitrate',
            'mailbox' => 'Mailbox',
            'callbackextension' => 'Callbackextension',
            'fullname' => 'Fullname',
            'trunkname' => 'Trunkname',
            'mohinterpret' => 'Mohinterpret',
            'mohsuggest' => 'Mohsuggest',
            'hasvoicemail' => 'Hasvoicemail',
            'calllimit' => 'Call Limit',
            'insecure' => 'Insecure',
        ];
    }
    public function getContext(){
        return $this->hasOne(SipContext::classname(),['name' => 'name']);
    }
}
