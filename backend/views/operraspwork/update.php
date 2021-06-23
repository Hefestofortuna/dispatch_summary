<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspWork */

$this->title = 'Update Oper Rasp Work: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oper Rasp Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oper-rasp-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
