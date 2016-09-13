<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "audio".
 *
 * @property integer $id
 * @property string $name
 * @property string $path
 */
class Audio extends \yii\db\ActiveRecord
{
    public $audio_file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'audio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'path'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['audio_file'],'file', 'skipOnEmpty' => true, 'extensions' => 'wav' ]
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
            'path' => 'Path',
            'audio_file' => 'File',
        ];
    }
}
