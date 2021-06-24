<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContractorReestrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contractor Reestrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contractor-reestr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contractor Reestr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'contractor_id',
            'station_id',
            'date_start',
            'date_finish',
            //'notice',
            //'ppr',
            //'act_dopusk',
            //'naryad_dopusk',
            //'act_kabel',
            //'otv_isp_info',
            //'otv_ruk_info',
            //'nadzor_doc',
            //'nadrzor_otv',
            //'title',
            //'haracter',
            //'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
