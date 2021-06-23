<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KasantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kasants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kasant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'putdate',
            'place',
            'cause',
            'time_start',
            //'time_finish',
            //'time_total',
            //'service',
            //'resolution',
            //'count',
            //'time_delay',
            //'user_id',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
