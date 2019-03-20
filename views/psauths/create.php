<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Psauths */

$this->title = 'Create Psauths';
$this->params['breadcrumbs'][] = ['label' => 'Psauths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psauths-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
