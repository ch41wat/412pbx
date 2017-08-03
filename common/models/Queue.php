<?php

namespace common\models;
use common\models\Prompt;
use common\models\Sipusers;

use Yii;

/**
 * This is the model class for table "queue".
 *
 * @property string $name
 * @property string $musiconhold
 * @property string $announce
 * @property string $context
 * @property integer $timeout
 * @property integer $monitor_join
 * @property string $monitor_format
 * @property string $queue_youarenext
 * @property string $queue_thereare
 * @property string $queue_callswaiting
 * @property string $queue_holdtime
 * @property string $queue_minutes
 * @property string $queue_seconds
 * @property string $queue_lessthan
 * @property string $queue_thankyou
 * @property string $queue_reporthold
 * @property integer $announce_frequency
 * @property integer $announce_round_seconds
 * @property string $announce_holdtime
 * @property integer $retry
 * @property integer $wrapuptime
 * @property integer $maxlen
 * @property integer $servicelevel
 * @property string $strategy
 * @property string $joinempty
 * @property string $leavewhenempty
 * @property integer $eventmemberstatus
 * @property integer $eventwhencalled
 * @property integer $reportholdtime
 * @property integer $memberdelay
 * @property integer $weight
 * @property integer $timeoutrestart
 * @property integer $ringinuse
 * @property integer $setinterfacevar
 */
class Queue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'queue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['timeout', 'monitor_join', 'announce_frequency', 'announce_round_seconds', 'retry', 'wrapuptime', 'maxlen', 'servicelevel', 'eventmemberstatus', 'eventwhencalled', 'reportholdtime', 'memberdelay', 'weight', 'timeoutrestart', 'ringinuse', 'setinterfacevar'], 'integer'],
            [['name', 'musiconhold', 'announce', 'context', 'monitor_format', 'queue_youarenext', 'queue_thereare', 'queue_callswaiting', 'queue_holdtime', 'queue_minutes', 'queue_seconds', 'queue_lessthan', 'queue_thankyou', 'queue_reporthold', 'announce_holdtime', 'strategy', 'joinempty', 'leavewhenempty'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'musiconhold' => 'Musiconhold',
            'announce' => 'Announce',
            'context' => 'Context',
            'timeout' => 'Timeout',
            'monitor_join' => 'Monitor Join',
            'monitor_format' => 'Monitor Format',
            'queue_youarenext' => 'Queue Youarenext',
            'queue_thereare' => 'Queue Thereare',
            'queue_callswaiting' => 'Queue Callswaiting',
            'queue_holdtime' => 'Queue Holdtime',
            'queue_minutes' => 'Queue Minutes',
            'queue_seconds' => 'Queue Seconds',
            'queue_lessthan' => 'Queue Lessthan',
            'queue_thankyou' => 'Queue Thankyou',
            'queue_reporthold' => 'Queue Reporthold',
            'announce_frequency' => 'Announce Frequency',
            'announce_round_seconds' => 'Announce Round Seconds',
            'announce_holdtime' => 'Announce Holdtime',
            'retry' => 'Retry',
            'wrapuptime' => 'Wrapuptime',
            'maxlen' => 'Maxlen',
            'servicelevel' => 'Servicelevel',
            'strategy' => 'Strategy',
            'joinempty' => 'Joinempty',
            'leavewhenempty' => 'Leavewhenempty',
            'eventmemberstatus' => 'Eventmemberstatus',
            'eventwhencalled' => 'Eventwhencalled',
            'reportholdtime' => 'Reportholdtime',
            'memberdelay' => 'Memberdelay',
            'weight' => 'Weight',
            'timeoutrestart' => 'Timeoutrestart',
            'ringinuse' => 'Ringinuse',
            'setinterfacevar' => 'Setinterfacevar',
        ];
    }
    public function getPrompt(){
        return $this->hasOne(Prompt::classname(),['name' => 'name']);
    }
    public function getSipusers(){
        return $this->hasOne(Sipusers::classname(),['name' => 'name']);
    }
}
