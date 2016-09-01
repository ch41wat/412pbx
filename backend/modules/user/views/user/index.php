<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\user\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary box-solid">

    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-group"></i> <?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create User', ['create'], ['class' => 'btn btn-info']) ?>
        </p>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
//            'id',
                'username',
//                'auth_key',
//                'password_hash',
//                'password_reset_token',
                'email:email',
                'status',
                'created_at',
                'updated_at',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>