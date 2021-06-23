<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspWorkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oper-rasp-work-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'oper_rasp_id') ?>

    <?= $form->field($model, 'oper_rasp_isp_id') ?>

    <?= $form->field($model, 'comment') ?>

    <?= $form->field($model, 'work') ?>

    <?php // echo $form->field($model, 'date_term') ?>

    <?php // echo $form->field($model, 'date_finish') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
