<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PscontactsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pscontacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'uri') ?>

    <?= $form->field($model, 'expiration_time') ?>

    <?= $form->field($model, 'qualify_frequency') ?>

    <?= $form->field($model, 'outbound_proxy') ?>

    <?php // echo $form->field($model, 'path') ?>

    <?php // echo $form->field($model, 'user_agent') ?>

    <?php // echo $form->field($model, 'qualify_timeout') ?>

    <?php // echo $form->field($model, 'reg_server') ?>

    <?php // echo $form->field($model, 'authenticate_qualify') ?>

    <?php // echo $form->field($model, 'via_addr') ?>

    <?php // echo $form->field($model, 'via_port') ?>

    <?php // echo $form->field($model, 'call_id') ?>

    <?php // echo $form->field($model, 'endpoint') ?>

    <?php // echo $form->field($model, 'prune_on_boot') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
