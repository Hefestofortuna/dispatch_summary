<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SprClassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spr Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-class-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spr Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cur',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
