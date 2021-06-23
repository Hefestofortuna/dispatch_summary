<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Otkl */

$this->title = 'Update Otkl: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Otkls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="otkl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
