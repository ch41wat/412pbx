<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\cdr\CdrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'calldate') ?>

    <?= $form->field($model, 'clid') ?>

    <?= $form->field($model, 'src') ?>

    <?= $form->field($model, 'dst') ?>

    <?php // echo $form->field($model, 'dcontext') ?>

    <?php // echo $form->field($model, 'channel') ?>

    <?php // echo $form->field($model, 'dstchannel') ?>

    <?php // echo $form->field($model, 'lastapp') ?>

    <?php // echo $form->field($model, 'lastdata') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'billsec') ?>

    <?php // echo $form->field($model, 'disposition') ?>

    <?php // echo $form->field($model, 'amaflags') ?>

    <?php // echo $form->field($model, 'accountcode') ?>

    <?php // echo $form->field($model, 'uniqueid') ?>

    <?php // echo $form->field($model, 'userfield') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
