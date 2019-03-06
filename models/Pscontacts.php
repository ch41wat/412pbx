<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ps_contacts".
 *
 * @property string $id
 * @property string $uri
 * @property string $expiration_time
 * @property int $qualify_frequency
 * @property string $outbound_proxy
 * @property string $path
 * @property string $user_agent
 * @property double $qualify_timeout
 * @property string $reg_server
 * @property string $authenticate_qualify
 * @property string $via_addr
 * @property int $via_port
 * @property string $call_id
 * @property string $endpoint
 * @property string $prune_on_boot
 */
class Pscontacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ps_contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['expiration_time', 'qualify_frequency', 'via_port'], 'integer'],
            [['path', 'authenticate_qualify', 'prune_on_boot'], 'string'],
            [['qualify_timeout'], 'number'],
            [['id', 'uri', 'user_agent', 'call_id'], 'string', 'max' => 255],
            [['outbound_proxy', 'via_addr', 'endpoint'], 'string', 'max' => 40],
            [['reg_server'], 'string', 'max' => 20],
            [['id'], 'unique'],
            [['id', 'reg_server'], 'unique', 'targetAttribute' => ['id', 'reg_server']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uri' => 'Uri',
            'expiration_time' => 'Expiration Time',
            'qualify_frequency' => 'Qualify Frequency',
            'outbound_proxy' => 'Outbound Proxy',
            'path' => 'Path',
            'user_agent' => 'User Agent',
            'qualify_timeout' => 'Qualify Timeout',
            'reg_server' => 'Reg Server',
            'authenticate_qualify' => 'Authenticate Qualify',
            'via_addr' => 'Via Addr',
            'via_port' => 'Via Port',
            'call_id' => 'Call ID',
            'endpoint' => 'Endpoint',
            'prune_on_boot' => 'Prune On Boot',
        ];
    }
}
