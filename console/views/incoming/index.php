<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IncomingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incomings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incoming-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Incoming', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'putdate',
            'num',
            'organization_id',
            //'file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
