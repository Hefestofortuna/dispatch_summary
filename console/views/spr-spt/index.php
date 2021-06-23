<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SprSptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spr Spts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-spt-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spr Spt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'station_id',
            'object',
            'spr_spt_system_id',
            'spr_spt_type_id',
            //'spr_balance_id',
            //'spr_class_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
