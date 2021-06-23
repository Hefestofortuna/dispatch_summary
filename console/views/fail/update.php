<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fail */

$this->title = 'Update Fail: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
