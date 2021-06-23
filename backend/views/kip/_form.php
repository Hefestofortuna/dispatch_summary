<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kip */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'plan')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'count_sent')->textInput() ?>

    <?= $form->field($model, 'count_install')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'date_install')->textInput() ?>

    <?= $form->field($model, 'date_ship')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
