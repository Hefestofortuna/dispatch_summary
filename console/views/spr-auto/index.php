<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SprAutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spr Autos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-auto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spr Auto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'brand',
            'number',
            'organization_id',
            'date_check',
            //'ts_reestr',
            //'ts_class',
            //'fuel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
