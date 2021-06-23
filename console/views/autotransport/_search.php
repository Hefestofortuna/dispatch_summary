<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AutotransportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autotransport-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'subdivision_id') ?>

    <?= $form->field($model, 'target') ?>

    <?= $form->field($model, 'contact_user_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'auto_id') ?>

    <?php // echo $form->field($model, 'driver_user_id') ?>

    <?php // echo $form->field($model, 'time_arrival') ?>

    <?php // echo $form->field($model, 'time_departure') ?>

    <?php // echo $form->field($model, 'odometr') ?>

    <?php // echo $form->field($model, 'status')->checkbox() ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
