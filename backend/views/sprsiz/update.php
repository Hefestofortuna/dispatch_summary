<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSiz */

$this->title = 'Update Spr Siz: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Spr Sizs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spr-siz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
