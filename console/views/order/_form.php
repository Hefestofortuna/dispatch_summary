<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_off')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'card_id')->textInput() ?>

    <?= $form->field($model, 'description_off')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_off')->textInput() ?>

    <?= $form->field($model, 'time_off')->textInput() ?>

    <?= $form->field($model, 'shns_off_user_id')->textInput() ?>

    <?= $form->field($model, 'shchd_off_user_id')->textInput() ?>

    <?= $form->field($model, 'apply_ds')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apply_shch_user_id')->textInput() ?>

    <?= $form->field($model, 'date_on')->textInput() ?>

    <?= $form->field($model, 'time_on')->textInput() ?>

    <?= $form->field($model, 'shns_on_user_id')->textInput() ?>

    <?= $form->field($model, 'shchd_on_user_id')->textInput() ?>

    <?= $form->field($model, 'description_on')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_on')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
