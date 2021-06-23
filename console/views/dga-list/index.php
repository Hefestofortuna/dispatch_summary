<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DgaListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dga Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dga-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dga List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'col',
            'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
