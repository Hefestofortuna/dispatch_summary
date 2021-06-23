<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\WindowapplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Windowapplications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="windowapplication-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Windowapplication', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dnc',
            'date',
            'station_id',
            'type',
            //'way',
            //'km',
            //'picket',
            //'shutdown:boolean',
            //'fio_main',
            //'fio_bd',
            //'representative:boolean',
            //'sign:boolean',
            //'shutdown_voltage:boolean',
            //'description',
            //'fio_shchd',
            //'written:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
