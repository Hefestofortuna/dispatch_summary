<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StationSubdivision */

$this->title = 'Create Station Subdivision';
$this->params['breadcrumbs'][] = ['label' => 'Station Subdivisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="station-subdivision-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
