<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SprClass */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spr-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cur')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
