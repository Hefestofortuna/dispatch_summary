<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SprElectroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spr Electros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-electro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spr Electro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'subdivision_id',
            'spr_electro_type_id',
            'spr_electro_obj_id',
            'fider_type',
            //'place',
            //'number',
            //'spr_electro_trans_id',
            //'organization_id',
            //'active:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
