<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\sipusers\SipusersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Sipusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-phone"></i> <?= Html::encode($this->title)?></h3>
    </div>
    <div class="box-body">

    <p>
        <?= Html::a('Create Sipusers', ['create'], ['class' => 'btn btn-info']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'deny',
//            'secret',
//            'dtmfmode',
            // 'canreinvite',
             'context',
            // 'host',
             'type',
            // 'nat',
            // 'port',
            // 'qualify',
             'callgroup',
             'pickupgroup',
            // 'mailbox',
            // 'permit',
             'callerid',
            // 'callcounter',
            // 'faxdetect',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>