<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pscontacts */

$this->title = 'Update Pscontacts: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pscontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pscontacts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
