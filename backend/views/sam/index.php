<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sam', ['create'], ['class' => 'btn btn-success']) ?>
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
            'time_start',
            'time_finish',
            'sam_from_id',
            //'subdivision_id',
            //'station_id',
            //'responsible_user_id',
            //'reason',
            //'description',
            //'status:boolean',
            //'user_id',
            //'title_object',
            //'sam_category_id',
            //'level',
            //'putdate_send',
            //'time_send',
            //'date_finish',
            //'organization_id',
            //'putdate_term',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
