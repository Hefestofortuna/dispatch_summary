<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kip-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kip', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'putdate',
            'station_id',
            'plan',
            'user_id',
            //'count_sent',
            //'count_install',
            //'organization_id',
            //'date_install',
            //'date_ship',
            //'subdivision_id',
            //'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
