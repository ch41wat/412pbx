<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Siptrunks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siptrunks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disallow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'peer' => 'Peer', 'friend' => 'Friend', 'user' => 'User', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'port')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insecure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtmfmode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualify')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'rtptimeout')->textInput() ?>

    <?= $form->field($model, 'rtpholdtimeout')->textInput() ?>

    <?= $form->field($model, 'context')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
