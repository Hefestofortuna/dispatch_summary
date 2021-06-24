<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StationSubdivision */

$this->title = 'Update Station Subdivision: ' . $model->station_id;
$this->params['breadcrumbs'][] = ['label' => 'Station Subdivisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->station_id, 'url' => ['view', 'station_id' => $model->station_id, 'subdivision_id' => $model->subdivision_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="station-subdivision-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
