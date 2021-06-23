<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOtSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-revision-ot-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_create') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'subdivision_id') ?>

    <?= $form->field($model, 'date_rev') ?>

    <?php // echo $form->field($model, 'date_time') ?>

    <?php // echo $form->field($model, 'date_finish') ?>

    <?php // echo $form->field($model, 'status')->checkbox() ?>

    <?php // echo $form->field($model, 'revisor') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'upload')->checkbox() ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'rev_user_id') ?>

    <?php // echo $form->field($model, 'first_kom_user_id') ?>

    <?php // echo $form->field($model, 'second_kom_user_id') ?>

    <?php // echo $form->field($model, 'time_rev') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
