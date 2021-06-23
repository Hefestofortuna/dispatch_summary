<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Windowapplication */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="windowapplication-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dnc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'way')->textInput() ?>

    <?= $form->field($model, 'km')->textInput() ?>

    <?= $form->field($model, 'picket')->textInput() ?>

    <?= $form->field($model, 'shutdown')->checkbox() ?>

    <?= $form->field($model, 'fio_main')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_bd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'representative')->checkbox() ?>

    <?= $form->field($model, 'sign')->checkbox() ?>

    <?= $form->field($model, 'shutdown_voltage')->checkbox() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_shchd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'written')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
