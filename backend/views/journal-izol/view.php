<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalIzol */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Journal Izols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="journal-izol-view">

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
            'station_id',
            'place',
            'mark',
            'date_create',
            'r_izol_start',
            'description',
            'shns_user_id',
            'date_finish',
            'step',
            'status:boolean',
            'r_izol_end',
            'date_next',
            'isDevice:boolean',
            'organization_id',
        ],
    ]) ?>

</div>
