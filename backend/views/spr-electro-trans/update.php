<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectroTrans */

$this->title = 'Update Spr Electro Trans: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Spr Electro Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spr-electro-trans-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
