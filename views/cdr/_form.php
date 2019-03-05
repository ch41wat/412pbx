<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cdr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calldate')->textInput() ?>

    <?= $form->field($model, 'clid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'src')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dcontext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastdata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'billsec')->textInput() ?>

    <?= $form->field($model, 'disposition')->dropDownList([ 'ANSWERED' => 'ANSWERED', 'BUSY' => 'BUSY', 'FAILED' => 'FAILED', 'NO ANSWER' => 'NO ANSWER', 'CONGESTION' => 'CONGESTION', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'channel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dstchannel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amaflags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accountcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uniqueid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userfield')->textInput() ?>

    <?= $form->field($model, 'answer')->textInput() ?>

    <?= $form->field($model, 'end')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
