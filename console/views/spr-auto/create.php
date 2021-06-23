<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprAuto */

$this->title = 'Create Spr Auto';
$this->params['breadcrumbs'][] = ['label' => 'Spr Autos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-auto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
