<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sipusers */

$this->title = 'Create Sipusers';
$this->params['breadcrumbs'][] = ['label' => 'Sipusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-phone-square"></i> <?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>