<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalIzolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-izol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'mark') ?>

    <?= $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'r_izol_start') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'shns_user_id') ?>

    <?php // echo $form->field($model, 'date_finish') ?>

    <?php // echo $form->field($model, 'step') ?>

    <?php // echo $form->field($model, 'status')->checkbox() ?>

    <?php // echo $form->field($model, 'r_izol_end') ?>

    <?php // echo $form->field($model, 'date_next') ?>

    <?php // echo $form->field($model, 'isDevice')->checkbox() ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
