<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSptType */

$this->title = 'Update Spr Spt Type: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Spr Spt Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spr-spt-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
