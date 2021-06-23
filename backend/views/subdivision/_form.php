<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Subdivision */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subdivision-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'briefing')->checkbox() ?>

    <?= $form->field($model, 'ekasui_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code_asui')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
