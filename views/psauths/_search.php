<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PsauthsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psauths-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
<<<<<<< HEAD
=======
        'options' => [
            'data-pjax' => 1
        ],
>>>>>>> 344a7e0b7fb7ec7cabc4bc7056e919d05f549642
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'auth_type') ?>

    <?= $form->field($model, 'nonce_lifetime') ?>

    <?= $form->field($model, 'md5_cred') ?>

    <?= $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'realm') ?>

    <?php // echo $form->field($model, 'username') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
