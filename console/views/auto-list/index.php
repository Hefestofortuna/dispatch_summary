<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AutoListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auto Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Auto List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'organization_id',
            'putdate',
            'auto_id',
            'user_id',
            //'hour',
            //'mileage',
            //'consumption_liter',
            //'kiloton',
            //'consumption_ton',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
