<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Warning */

$this->title = 'Update Warning: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Warnings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warning-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
