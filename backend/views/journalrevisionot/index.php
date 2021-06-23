<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\JournalRevisionOtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Journal Revision Ots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-revision-ot-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Journal Revision Ot', ['create'], ['class' => 'btn btn-success']) ?>
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
            'station_id',
            'subdivision_id',
            'date_rev',
            //'date_time',
            //'date_finish',
            //'status:boolean',
            //'revisor',
            //'type',
            //'upload:boolean',
            //'result',
            //'rev_user_id',
            //'first_kom_user_id',
            //'second_kom_user_id',
            //'time_rev',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
