<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pscontacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pscontacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expiration_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualify_frequency')->textInput() ?>

    <?= $form->field($model, 'outbound_proxy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'path')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_agent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualify_timeout')->textInput() ?>

    <?= $form->field($model, 'reg_server')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authenticate_qualify')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'via_addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'via_port')->textInput() ?>

    <?= $form->field($model, 'call_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endpoint')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prune_on_boot')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
