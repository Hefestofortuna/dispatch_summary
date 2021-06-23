<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SubdivisionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subdivision-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'briefing')->checkbox() ?>

    <?php // echo $form->field($model, 'ekasui_title') ?>

    <?php // echo $form->field($model, 'code_asui') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
