<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Planer */

$this->title = 'Create Planer';
$this->params['breadcrumbs'][] = ['label' => 'Planers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
