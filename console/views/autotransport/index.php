<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AutotransportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Autotransports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autotransport-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Autotransport', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'subdivision_id',
            'target',
            'contact_user_id',
            //'user_id',
            //'auto_id',
            //'driver_user_id',
            //'time_arrival',
            //'time_departure',
            //'odometr',
            //'status:boolean',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
