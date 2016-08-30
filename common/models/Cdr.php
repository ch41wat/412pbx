<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cdr".
 *
 * @property string $calldate
 * @property string $clid
 * @property string $src
 * @property string $dst
 * @property string $dcontext
 * @property string $channel
 * @property string $dstchannel
 * @property string $lastapp
 * @property string $lastdata
 * @property integer $duration
 * @property integer $billsec
 * @property string $disposition
 * @property integer $amaflags
 * @property string $accountcode
 * @property string $uniqueid
 * @property string $userfield
 */
class Cdr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cdr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['calldate'], 'safe'],
            [['duration', 'billsec', 'amaflags'], 'integer'],
            [['clid', 'src', 'dst', 'dcontext', 'channel', 'dstchannel', 'lastapp', 'lastdata'], 'string', 'max' => 80],
            [['disposition'], 'string', 'max' => 45],
            [['accountcode'], 'string', 'max' => 20],
            [['uniqueid'], 'string', 'max' => 32],
            [['userfield'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'calldate' => 'Calldate',
            'clid' => 'Clid',
            'src' => 'Src',
            'dst' => 'Dst',
            'dcontext' => 'Dcontext',
            'channel' => 'Channel',
            'dstchannel' => 'Dstchannel',
            'lastapp' => 'Lastapp',
            'lastdata' => 'Lastdata',
            'duration' => 'Duration',
            'billsec' => 'Billsec',
            'disposition' => 'Disposition',
            'amaflags' => 'Amaflags',
            'accountcode' => 'Accountcode',
            'uniqueid' => 'Uniqueid',
            'userfield' => 'Userfield',
        ];
    }
}
