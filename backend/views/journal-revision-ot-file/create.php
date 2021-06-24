<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOtFile */

$this->title = 'Create Journal Revision Ot File';
$this->params['breadcrumbs'][] = ['label' => 'Journal Revision Ot Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-revision-ot-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
