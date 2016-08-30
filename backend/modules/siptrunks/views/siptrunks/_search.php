<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\siptrunks\SiptrunksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siptrunks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'disallow') ?>

    <?= $form->field($model, 'host') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'port') ?>

    <?php // echo $form->field($model, 'insecure') ?>

    <?php // echo $form->field($model, 'allow') ?>

    <?php // echo $form->field($model, 'dtmfmode') ?>

    <?php // echo $form->field($model, 'qualify') ?>

    <?php // echo $form->field($model, 'rtptimeout') ?>

    <?php // echo $form->field($model, 'rtpholdtimeout') ?>

    <?php // echo $form->field($model, 'context') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
