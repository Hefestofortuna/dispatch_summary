<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Planer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'test')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
