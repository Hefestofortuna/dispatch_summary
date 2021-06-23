<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'time_start') ?>

    <?= $form->field($model, 'time_finish') ?>

    <?= $form->field($model, 'sam_from_id') ?>

    <?php // echo $form->field($model, 'subdivision_id') ?>

    <?php // echo $form->field($model, 'station_id') ?>

    <?php // echo $form->field($model, 'responsible_user_id') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'status')->checkbox() ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'title_object') ?>

    <?php // echo $form->field($model, 'sam_category_id') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'putdate_send') ?>

    <?php // echo $form->field($model, 'time_send') ?>

    <?php // echo $form->field($model, 'date_finish') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <?php // echo $form->field($model, 'putdate_term') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
