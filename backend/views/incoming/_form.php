<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Incoming */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incoming-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
