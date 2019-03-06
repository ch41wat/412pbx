<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pscontacts */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pscontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pscontacts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'uri',
            'expiration_time',
            'qualify_frequency',
            'outbound_proxy',
            'path:ntext',
            'user_agent',
            'qualify_timeout',
            'reg_server',
            'authenticate_qualify',
            'via_addr',
            'via_port',
            'call_id',
            'endpoint',
            'prune_on_boot',
        ],
    ]) ?>

</div>
