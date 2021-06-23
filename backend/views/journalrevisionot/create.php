<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOt */

$this->title = 'Create Journal Revision Ot';
$this->params['breadcrumbs'][] = ['label' => 'Journal Revision Ots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-revision-ot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
