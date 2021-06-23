<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AutoList */

$this->title = 'Create Auto List';
$this->params['breadcrumbs'][] = ['label' => 'Auto Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
