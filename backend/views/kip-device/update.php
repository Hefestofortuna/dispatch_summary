<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KipDevice */

$this->title = 'Update Kip Device: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kip Devices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kip-device-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
