<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Searches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-search-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News Search', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            'user_id',
            'putdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
