<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalSptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-spt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_create') ?>

    <?= $form->field($model, 'time_create') ?>

    <?= $form->field($model, 'character') ?>

    <?= $form->field($model, 'reported') ?>

    <?php // echo $form->field($model, 'spr_spt_id') ?>

    <?php // echo $form->field($model, 'date_to') ?>

    <?php // echo $form->field($model, 'time_to') ?>

    <?php // echo $form->field($model, 'pers_to') ?>

    <?php // echo $form->field($model, 'date_finish') ?>

    <?php // echo $form->field($model, 'time_finish') ?>

    <?php // echo $form->field($model, 'pers_finish') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'shd_finish') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
