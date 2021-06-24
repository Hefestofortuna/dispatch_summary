<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SamCategory */

$this->title = 'Update Sam Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sam Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sam-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
