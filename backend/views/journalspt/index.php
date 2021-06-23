<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\JournalSptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Journal Spts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-spt-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Journal Spt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_create',
            'time_create',
            'character',
            'reported',
            //'spr_spt_id',
            //'date_to',
            //'time_to',
            //'pers_to',
            //'date_finish',
            //'time_finish',
            //'pers_finish',
            //'description',
            //'status',
            //'shd_finish',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
