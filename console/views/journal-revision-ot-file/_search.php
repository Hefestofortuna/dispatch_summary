<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOtFileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-revision-ot-file-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'journal_revision_ot_id') ?>

    <?= $form->field($model, 'file') ?>

    <?= $form->field($model, 'date_upload') ?>

    <?= $form->field($model, 'type')->checkbox() ?>

    <?php // echo $form->field($model, 'title') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
