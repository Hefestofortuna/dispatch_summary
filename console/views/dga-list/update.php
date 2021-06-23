<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DgaList */

$this->title = 'Update Dga List: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Dga Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dga-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
