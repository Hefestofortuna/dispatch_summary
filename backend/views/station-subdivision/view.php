<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StationSubdivision */

$this->title = $model->station_id;
$this->params['breadcrumbs'][] = ['label' => 'Station Subdivisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="station-subdivision-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'station_id' => $model->station_id, 'subdivision_id' => $model->subdivision_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'station_id' => $model->station_id, 'subdivision_id' => $model->subdivision_id], [
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
            'station_id',
            'subdivision_id',
        ],
    ]) ?>

</div>
