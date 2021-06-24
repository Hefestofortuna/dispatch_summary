<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspFile */

$this->title = 'Update Oper Rasp File: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oper Rasp Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oper-rasp-file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
