<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JournalIzolControlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Journal Izol Controls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-izol-control-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Journal Izol Control', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'journal_izol_id',
            'putdate',
            'r_izol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
