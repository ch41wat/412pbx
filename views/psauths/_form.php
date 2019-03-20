<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Psauths */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psauths-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_type')->dropDownList([ 'md5' => 'Md5', 'userpass' => 'Userpass', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nonce_lifetime')->textInput() ?>

    <?= $form->field($model, 'md5_cred')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'realm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
