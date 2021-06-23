<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kip */

$this->title = 'Update Kip: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kips', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kip-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
