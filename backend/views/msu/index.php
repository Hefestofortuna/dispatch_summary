<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MsuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Msus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="msu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Msu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_setup',
            'switch',
            'power_supply',
            'msu_num',
            //'msu_year',
            //'msu_perevod_plus',
            //'msu_perevod_min',
            //'msu_friction_plus',
            //'msu_friction_min',
            //'emsu_perevod_plus',
            //'emsu_perevod_min',
            //'emsu_friction_plus',
            //'emsu_friction_min',
            //'emsu_usilie_friction_plus',
            //'emsu_usilie_friction_min',
            //'organization_id',
            //'station_id',
            //'subdivision_id',
            //'user_id',
            //'date_create',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
