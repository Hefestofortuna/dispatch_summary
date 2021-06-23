<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MsuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="msu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_setup') ?>

    <?= $form->field($model, 'switch') ?>

    <?= $form->field($model, 'power_supply') ?>

    <?= $form->field($model, 'msu_num') ?>

    <?php // echo $form->field($model, 'msu_year') ?>

    <?php // echo $form->field($model, 'msu_perevod_plus') ?>

    <?php // echo $form->field($model, 'msu_perevod_min') ?>

    <?php // echo $form->field($model, 'msu_friction_plus') ?>

    <?php // echo $form->field($model, 'msu_friction_min') ?>

    <?php // echo $form->field($model, 'emsu_perevod_plus') ?>

    <?php // echo $form->field($model, 'emsu_perevod_min') ?>

    <?php // echo $form->field($model, 'emsu_friction_plus') ?>

    <?php // echo $form->field($model, 'emsu_friction_min') ?>

    <?php // echo $form->field($model, 'emsu_usilie_friction_plus') ?>

    <?php // echo $form->field($model, 'emsu_usilie_friction_min') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <?php // echo $form->field($model, 'station_id') ?>

    <?php // echo $form->field($model, 'subdivision_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
