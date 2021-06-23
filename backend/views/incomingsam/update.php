<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IncomingSam */

$this->title = 'Update Incoming Sam: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Incoming Sams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="incoming-sam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
