<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\OperRaspIspSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oper Rasp Isps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oper-rasp-isp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oper Rasp Isp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'oper_rasp_sam_id',
            'isp_user_id',
            'description',
            'date_finish',
            //'status:boolean',
            //'oper_rasp_id',
            //'percent',
            //'agreed_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
