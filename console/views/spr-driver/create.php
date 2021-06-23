<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprDriver */

$this->title = 'Create Spr Driver';
$this->params['breadcrumbs'][] = ['label' => 'Spr Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-driver-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
