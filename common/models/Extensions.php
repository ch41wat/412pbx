<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "extensions".
 *
 * @property integer $id
 * @property string $context
 * @property string $exten
 * @property integer $priority
 * @property string $app
 * @property string $appdata
 */
class Extensions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'extensions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['priority'], 'integer'],
            [['context', 'exten', 'app'], 'string', 'max' => 20],
            [['appdata'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'context' => 'Context',
            'exten' => 'Exten',
            'priority' => 'Priority',
            'app' => 'App',
            'appdata' => 'Appdata',
        ];
    }
}
