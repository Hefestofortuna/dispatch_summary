<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BriefingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Briefings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="briefing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Briefing', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'employee_user_id',
            'putdate',
            'instructor_user_id',
            'type',
            //'period',
            //'putdate_next',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
