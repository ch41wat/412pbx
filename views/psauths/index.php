<?php

use yii\helpers\Html;
use yii\grid\GridView;
<<<<<<< HEAD

=======
use yii\widgets\Pjax;
>>>>>>> 344a7e0b7fb7ec7cabc4bc7056e919d05f549642
/* @var $this yii\web\View */
/* @var $searchModel app\models\PsauthsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Psauths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psauths-index">

    <h1><?= Html::encode($this->title) ?></h1>
<<<<<<< HEAD
=======
    <?php Pjax::begin(); ?>
>>>>>>> 344a7e0b7fb7ec7cabc4bc7056e919d05f549642
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Psauths', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'auth_type',
            'nonce_lifetime:datetime',
            'md5_cred',
            'password',
            //'realm',
            //'username',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<<<<<<< HEAD
=======
    <?php Pjax::end(); ?>
>>>>>>> 344a7e0b7fb7ec7cabc4bc7056e919d05f549642
</div>
