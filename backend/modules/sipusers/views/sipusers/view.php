<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sipusers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sipusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-phone-square"></i> <?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </p>

        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'deny',
                'secret',
                'dtmfmode',
                'canreinvite',
                'context',
                'host',
                'type',
                'nat',
                'port',
                'qualify',
                'callgroup',
                'pickupgroup',
                'mailbox',
                'permit',
                'callerid',
                'callcounter',
                'faxdetect',
                'callbackextension',
                'fullcontact',
                'ipaddr',
                'regseconds',
                'useragent',
                'lastms',
            ],
        ])
        ?>

    </div>
</div>
