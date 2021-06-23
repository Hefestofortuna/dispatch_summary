<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'time_start')->textInput() ?>

    <?= $form->field($model, 'time_finish')->textInput() ?>

    <?= $form->field($model, 'sam_from_id')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'responsible_user_id')->textInput() ?>

    <?= $form->field($model, 'reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'title_object')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sam_category_id')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'putdate_send')->textInput() ?>

    <?= $form->field($model, 'time_send')->textInput() ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'putdate_term')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
