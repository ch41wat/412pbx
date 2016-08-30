<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\cdr\CdrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cdrs';
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-phone"></i> <?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
//                'id',
                'calldate',
                'clid',
                'src',
                'dst',
                'dcontext',
                // 'channel',
                // 'dstchannel',
                'lastapp',
                'lastdata',
                'duration',
                // 'billsec',
                // 'disposition',
                // 'amaflags',
                // 'accountcode',
                'uniqueid',
                // 'userfield',
//                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>
