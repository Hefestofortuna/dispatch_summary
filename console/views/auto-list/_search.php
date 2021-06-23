<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AutoListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'auto_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'hour') ?>

    <?php // echo $form->field($model, 'mileage') ?>

    <?php // echo $form->field($model, 'consumption_liter') ?>

    <?php // echo $form->field($model, 'kiloton') ?>

    <?php // echo $form->field($model, 'consumption_ton') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
