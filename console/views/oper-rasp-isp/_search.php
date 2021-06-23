<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspIspSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oper-rasp-isp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'oper_rasp_sam_id') ?>

    <?= $form->field($model, 'isp_user_id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'date_finish') ?>

    <?php // echo $form->field($model, 'status')->checkbox() ?>

    <?php // echo $form->field($model, 'oper_rasp_id') ?>

    <?php // echo $form->field($model, 'percent') ?>

    <?php // echo $form->field($model, 'agreed_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
