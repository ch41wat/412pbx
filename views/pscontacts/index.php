<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PscontactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pscontacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pscontacts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pscontacts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'uri',
//            'expiration_time',
//            'qualify_frequency',
//            'outbound_proxy',
            //'path:ntext',
            'endpoint',
            'user_agent',
            //'qualify_timeout',
            //'reg_server',
            //'authenticate_qualify',
            'via_addr',
            'via_port',
            //'call_id',
            //'prune_on_boot',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
