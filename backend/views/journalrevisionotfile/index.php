<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\JournalRevisionOtFileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Journal Revision Ot Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-revision-ot-file-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Journal Revision Ot File', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'journal_revision_ot_id',
            'file',
            'date_upload',
            'type:boolean',
            //'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
