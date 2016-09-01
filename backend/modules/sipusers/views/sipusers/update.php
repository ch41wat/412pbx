<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sipusers */

$this->title = 'Update Sipusers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sipusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-phone-square"></i> <?= Html::encode($model->name) ?></h3>
    </div>
    <div class="box-body">

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>