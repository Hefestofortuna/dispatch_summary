<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalIzol */

$this->title = 'Create Journal Izol';
$this->params['breadcrumbs'][] = ['label' => 'Journal Izols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-izol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
