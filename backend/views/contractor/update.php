<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contractor */

$this->title = 'Update Contractor: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contractors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contractor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
