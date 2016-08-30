<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\sipusers\SipusersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sipusers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'deny') ?>

    <?= $form->field($model, 'secret') ?>

    <?= $form->field($model, 'dtmfmode') ?>

    <?php // echo $form->field($model, 'canreinvite') ?>

    <?php // echo $form->field($model, 'context') ?>

    <?php // echo $form->field($model, 'host') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'nat') ?>

    <?php // echo $form->field($model, 'port') ?>

    <?php // echo $form->field($model, 'qualify') ?>

    <?php // echo $form->field($model, 'callgroup') ?>

    <?php // echo $form->field($model, 'pickupgroup') ?>

    <?php // echo $form->field($model, 'mailbox') ?>

    <?php // echo $form->field($model, 'permit') ?>

    <?php // echo $form->field($model, 'callerid') ?>

    <?php // echo $form->field($model, 'callcounter') ?>

    <?php // echo $form->field($model, 'faxdetect') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
