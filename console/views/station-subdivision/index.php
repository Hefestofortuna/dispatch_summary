<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StationSubdivisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Station Subdivisions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="station-subdivision-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Station Subdivision', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'station_id',
            'subdivision_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
