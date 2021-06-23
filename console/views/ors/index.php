<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'station_id',
            'sum_main_pch',
            'sum_main_shch',
            'sum_main',
            //'putdate',
            //'sum_minor_pch',
            //'sum_minor_shch',
            //'sum_minor',
            //'subdivision_id',
            //'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
