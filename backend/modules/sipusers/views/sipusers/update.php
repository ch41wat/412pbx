<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sipusers */

//$this->title = 'Update Sipusers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sipusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-primary box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-phone"></i> <?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <p>

        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>