<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KipDeviceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kip-device-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'subdivision_id') ?>

    <?= $form->field($model, 'type_si') ?>

    <?= $form->field($model, 'num_si') ?>

    <?php // echo $form->field($model, 'pudate') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
