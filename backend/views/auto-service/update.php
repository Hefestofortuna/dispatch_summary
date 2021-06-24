<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AutoService */

$this->title = 'Update Auto Service: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Auto Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auto-service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
