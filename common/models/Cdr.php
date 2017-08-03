<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cdr".
 *
 * @property string $id
 * @property string $calldate
 * @property string $clid
 * @property string $src
 * @property string $dst
 * @property string $dcontext
 * @property string $lastapp
 * @property string $lastdata
 * @property double $duration
 * @property double $billsec
 * @property string $disposition
 * @property string $channel
 * @property string $dstchannel
 * @property string $amaflags
 * @property string $accountcode
 * @property string $uniqueid
 * @property double $userfield
 * @property string $answer
 * @property string $end
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
            [['calldate', 'answer', 'end'], 'required'],
            [['calldate', 'answer', 'end'], 'safe'],
            [['duration', 'billsec', 'userfield'], 'number'],
            [['disposition'], 'string'],
            [['clid', 'src', 'dst', 'dcontext'], 'string', 'max' => 80],
            [['lastapp', 'lastdata'], 'string', 'max' => 200],
            [['channel', 'dstchannel', 'amaflags'], 'string', 'max' => 50],
            [['accountcode'], 'string', 'max' => 20],
            [['uniqueid'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'calldate' => 'Calldate',
            'clid' => 'Caller ID',
            'src' => 'Src',
            'dst' => 'Destination',
            'dcontext' => 'Context',
            'lastapp' => 'Lastapp',
            'lastdata' => 'Lastdata',
            'duration' => 'Duration',
            'billsec' => 'Billsec',
            'disposition' => 'Disposition',
            'channel' => 'Channel',
            'dstchannel' => 'Dstchannel',
            'amaflags' => 'Amaflags',
            'accountcode' => 'Accountcode',
            'uniqueid' => 'Uniqueid',
            'userfield' => 'Userfield',
            'answer' => 'Answer',
            'end' => 'End',
        ];
    }
}
