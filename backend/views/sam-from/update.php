<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SamFrom */

$this->title = 'Update Sam From: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sam Froms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sam-from-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
