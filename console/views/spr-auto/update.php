<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprAuto */

$this->title = 'Update Spr Auto: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Spr Autos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spr-auto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
