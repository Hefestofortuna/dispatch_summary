<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Windowapplication */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Windowapplications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="windowapplication-view">

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
            'dnc',
            'date',
            'station_id',
            'type',
            'way',
            'km',
            'picket',
            'shutdown:boolean',
            'fio_main',
            'fio_bd',
            'representative:boolean',
            'sign:boolean',
            'shutdown_voltage:boolean',
            'description',
            'fio_shchd',
            'written:boolean',
        ],
    ]) ?>

</div>
