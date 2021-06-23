<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AutoService */

$this->title = 'Create Auto Service';
$this->params['breadcrumbs'][] = ['label' => 'Auto Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
