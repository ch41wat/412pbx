<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ps_aors".
 *
 * @property string $id
 * @property string $contact
 * @property int $default_expiration
 * @property string $mailboxes
 * @property int $max_contacts
 * @property int $minimum_expiration
 * @property string $remove_existing
 * @property int $qualify_frequency
 * @property string $authenticate_qualify
 * @property int $maximum_expiration
 * @property string $outbound_proxy
 * @property string $support_path
 * @property double $qualify_timeout
 * @property string $voicemail_extension
 */
class Psaors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ps_aors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['default_expiration', 'max_contacts', 'minimum_expiration', 'qualify_frequency', 'maximum_expiration'], 'integer'],
            [['remove_existing', 'authenticate_qualify', 'support_path'], 'string'],
            [['qualify_timeout'], 'number'],
            [['id', 'outbound_proxy', 'voicemail_extension'], 'string', 'max' => 40],
            [['contact'], 'string', 'max' => 255],
            [['mailboxes'], 'string', 'max' => 80],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contact' => 'Contact',
            'default_expiration' => 'Default Expiration',
            'mailboxes' => 'Mailboxes',
            'max_contacts' => 'Max Contacts',
            'minimum_expiration' => 'Minimum Expiration',
            'remove_existing' => 'Remove Existing',
            'qualify_frequency' => 'Qualify Frequency',
            'authenticate_qualify' => 'Authenticate Qualify',
            'maximum_expiration' => 'Maximum Expiration',
            'outbound_proxy' => 'Outbound Proxy',
            'support_path' => 'Support Path',
            'qualify_timeout' => 'Qualify Timeout',
            'voicemail_extension' => 'Voicemail Extension',
        ];
    }
}
