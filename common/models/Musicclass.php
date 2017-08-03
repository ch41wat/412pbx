<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "musicclass".
 *
 * @property integer $id
 * @property string $dir_name
 * @property string $file
 */
class Musicclass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'musicclass';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dir_name', 'file'], 'required'],
            [['dir_name', 'file'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dir_name' => 'Dir Name',
            'file' => 'File',
        ];
    }
}
