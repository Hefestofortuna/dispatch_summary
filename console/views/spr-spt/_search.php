<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spr-spt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'object') ?>

    <?= $form->field($model, 'spr_spt_system_id') ?>

    <?= $form->field($model, 'spr_spt_type_id') ?>

    <?php // echo $form->field($model, 'spr_balance_id') ?>

    <?php // echo $form->field($model, 'spr_class_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
