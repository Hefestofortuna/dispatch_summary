<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MovementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movement-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Movement', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pubdate',
            'subdivision_id',
            'user_id',
            'status_id',
            //'work1:ntext',
            //'work2:ntext',
            //'duty:boolean',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
