<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WarningSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warnings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warning-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Warning', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'station_id',
            'place',
            'description',
            'date_work',
            //'time_from',
            //'time_to',
            //'date_arm',
            //'user_id',
            //'time_arm',
            //'arm_user_id',
            //'organization_id',
            //'pub_date',
            //'number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
