<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\OtklSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Otkls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otkl-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Otkl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'putdate',
            'time_from',
            'time_to',
            'station_id',
            //'description',
            //'object',
            //'transfer_user_id',
            //'user_id',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
