<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Msu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="msu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_setup')->textInput() ?>

    <?= $form->field($model, 'switch')->textInput() ?>

    <?= $form->field($model, 'power_supply')->textInput() ?>

    <?= $form->field($model, 'msu_num')->textInput() ?>

    <?= $form->field($model, 'msu_year')->textInput() ?>

    <?= $form->field($model, 'msu_perevod_plus')->textInput() ?>

    <?= $form->field($model, 'msu_perevod_min')->textInput() ?>

    <?= $form->field($model, 'msu_friction_plus')->textInput() ?>

    <?= $form->field($model, 'msu_friction_min')->textInput() ?>

    <?= $form->field($model, 'emsu_perevod_plus')->textInput() ?>

    <?= $form->field($model, 'emsu_perevod_min')->textInput() ?>

    <?= $form->field($model, 'emsu_friction_plus')->textInput() ?>

    <?= $form->field($model, 'emsu_friction_min')->textInput() ?>

    <?= $form->field($model, 'emsu_usilie_friction_plus')->textInput() ?>

    <?= $form->field($model, 'emsu_usilie_friction_min')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
