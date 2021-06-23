<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectro */

$this->title = 'Update Spr Electro: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Spr Electros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spr-electro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
