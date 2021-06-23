<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalSiz */

$this->title = 'Update Journal Siz: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Journal Sizs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="journal-siz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
