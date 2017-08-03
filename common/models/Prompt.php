<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\BaseFileHelper;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "prompt".
 *
 * @property integer $id
 * @property string $name
 */
class Prompt extends \yii\db\ActiveRecord {

    const PERMISSIONS_PRIVATE = 10;
    const PERMISSIONS_PUBLIC = 20;

    public $prompt;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'prompt';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['prompt'], 'file', 'skipOnEmpty' => true, 'extensions' => 'wav'],
            [['name', 'filepath'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'filepath' => 'File',
        ];
    }

    const UPLOAD_FOLDER = 'freelances';

//...........

    public static function getUploadPath() {
        return Yii::getAlias('@webroot') . '/uploads/prompt' . self::UPLOAD_FOLDER . 'uploads/prompt/';
    }

    public static function getUploadUrl() {
        return Url::base(true) . 'uploads/prompt/' . self::UPLOAD_FOLDER . 'uploads/prompt/';
    }

    public $promptFile;

    public function upload() {
        if ($this->validate()) {
            $this->promptFile->saveAs('uploads/prompt/' . $this->promptFile->baseName . '.' . $this->promptFile->extension);
            return true;
        } else {
            return false;
        }
    }

}
