<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ps_auths".
 *
 * @property string $id
 * @property string $auth_type
 * @property int $nonce_lifetime
 * @property string $md5_cred
 * @property string $password
 * @property string $realm
 * @property string $username
 */
class Psauths extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ps_auths';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['auth_type'], 'string'],
            [['nonce_lifetime'], 'integer'],
            [['id', 'md5_cred', 'realm', 'username'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 80],
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
            'auth_type' => 'Auth Type',
            'nonce_lifetime' => 'Nonce Lifetime',
            'md5_cred' => 'Md5 Cred',
            'password' => 'Password',
            'realm' => 'Realm',
            'username' => 'Username',
        ];
    }
}
