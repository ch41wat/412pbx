<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\siptrunks\SiptrunksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siptrunks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-hdd-o"></i> <?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Add Siptrunks', ['create'], ['class' => 'btn btn-info']) ?>
        </p>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
//                'id',
                'name',
                'disallow',
                'host',
                'type',
                 'port',
                 'insecure',
                 'allow',
                 'dtmfmode',
                // 'qualify',
                // 'rtptimeout:datetime',
                // 'rtpholdtimeout:datetime',
                 'context',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>