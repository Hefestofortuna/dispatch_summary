<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'putdate',
            'date_start',
            'time_start',
            'date_finish',
            //'time_finish',
            //'service_id',
            //'description',
            //'subdivision_id',
            //'user_id',
            //'character',
            //'station_id',
            //'fail_user_id',
            //'organization_id',
            //'system:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
