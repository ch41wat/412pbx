<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "musiconhold".
 *
 * @property string $name
 * @property string $directory
 * @property string $application
 * @property string $mode
 * @property string $format
 */
class Musiconhold extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'musiconhold';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'mode'], 'string', 'max' => 80],
            [['directory', 'application'], 'string', 'max' => 255],
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()   
    {
        return [
            'name' => 'Name',
            'mode' => 'Mode',
            'directory' => 'Class',
            'application' => 'Application',
            ];
    }
}
