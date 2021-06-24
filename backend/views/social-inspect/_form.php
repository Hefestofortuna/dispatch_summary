<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialInspect */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="social-inspect-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_find')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'who_give')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_last')->textInput() ?>

    <?= $form->field($model, 'date_fix')->textInput() ?>

    <?= $form->field($model, 'who_control')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
