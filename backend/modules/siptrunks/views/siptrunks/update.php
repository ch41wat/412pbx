<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siptrunks */

$this->title = 'Update Siptrunks: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Siptrunks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-phone"></i> <?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">


        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>