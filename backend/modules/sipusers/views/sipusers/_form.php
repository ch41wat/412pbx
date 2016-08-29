<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sipusers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sipusers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deny')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtmfmode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'canreinvite')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'context')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'friend' => 'Friend', 'user' => 'User', 'peer' => 'Peer', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nat')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'port')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualify')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'callgroup')->textInput() ?>

    <?= $form->field($model, 'pickupgroup')->textInput() ?>

    <?= $form->field($model, 'mailbox')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callerid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callcounter')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'faxdetect')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
