<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dga */

$this->title = 'Update Dga: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dgas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
