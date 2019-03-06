<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CdrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Call Detail Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdr-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'calldate',
            'clid',
            'src',
            'dst',
            'dcontext',
            'lastapp',
            'lastdata',
            'duration',
            'billsec',
            'disposition',
            'channel',
            'dstchannel',
//            'amaflags',
//            'accountcode',
            'uniqueid',
//            'userfield',
            'answer',
            'end',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
