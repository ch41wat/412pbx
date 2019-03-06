<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pscontacts */

$this->title = 'Create Pscontacts';
$this->params['breadcrumbs'][] = ['label' => 'Pscontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pscontacts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
