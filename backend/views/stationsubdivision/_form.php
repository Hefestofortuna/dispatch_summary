<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StationSubdivision */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="station-subdivision-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
