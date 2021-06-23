<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KasantSearch */

$this->title = 'Update Kasant Search: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kasant Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kasant-search-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
