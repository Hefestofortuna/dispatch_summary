<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOt */

$this->title = 'Update Journal Revision Ot: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Journal Revision Ots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="journal-revision-ot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
