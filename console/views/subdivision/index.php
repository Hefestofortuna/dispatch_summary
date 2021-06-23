<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubdivisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subdivisions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subdivision-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Subdivision', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'organization_id',
            'title',
            'user_id',
            'briefing:boolean',
            //'ekasui_title',
            //'code_asui',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
