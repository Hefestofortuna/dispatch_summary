<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AutoServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auto Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-service-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Auto Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'period_odometr',
            'period_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
