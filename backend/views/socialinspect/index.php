<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SocialInspectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Social Inspects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-inspect-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Social Inspect', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_find',
            'station_id',
            'comment',
            'service_id',
            //'user_id',
            //'who_give',
            //'date_last',
            //'date_fix',
            //'who_control',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
