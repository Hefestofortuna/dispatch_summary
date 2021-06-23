<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WindowSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Windows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="window-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Window', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'putdate',
            'organization',
            'work',
            'place',
            //'plan',
            //'hozed',
            //'leader',
            //'spec',
            //'description',
            //'transfer_user_id',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
