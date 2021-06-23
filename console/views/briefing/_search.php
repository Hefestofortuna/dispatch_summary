<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BriefingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="briefing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'employee_user_id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'instructor_user_id') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'period') ?>

    <?php // echo $form->field($model, 'putdate_next') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
