<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JournalIzolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Journal Izols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-izol-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Journal Izol', ['create'], ['class' => 'btn btn-success']) ?>
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
            'mark',
            'date_create',
            //'r_izol_start',
            //'description',
            //'shns_user_id',
            //'date_finish',
            //'step',
            //'status:boolean',
            //'r_izol_end',
            //'date_next',
            //'isDevice:boolean',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
