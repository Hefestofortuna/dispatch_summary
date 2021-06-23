<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOt */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Journal Revision Ots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="journal-revision-ot-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_create',
            'station_id',
            'subdivision_id',
            'date_rev',
            'date_time',
            'date_finish',
            'status:boolean',
            'revisor',
            'type',
            'upload:boolean',
            'result',
            'rev_user_id',
            'first_kom_user_id',
            'second_kom_user_id',
            'time_rev',
            'organization_id',
        ],
    ]) ?>

</div>
