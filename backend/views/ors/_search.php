<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'sum_main_pch') ?>

    <?= $form->field($model, 'sum_main_shch') ?>

    <?= $form->field($model, 'sum_main') ?>

    <?php // echo $form->field($model, 'putdate') ?>

    <?php // echo $form->field($model, 'sum_minor_pch') ?>

    <?php // echo $form->field($model, 'sum_minor_shch') ?>

    <?php // echo $form->field($model, 'sum_minor') ?>

    <?php // echo $form->field($model, 'subdivision_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
