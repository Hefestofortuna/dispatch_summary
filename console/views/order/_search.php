<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'num_off') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'card_id') ?>

    <?= $form->field($model, 'description_off') ?>

    <?php // echo $form->field($model, 'date_off') ?>

    <?php // echo $form->field($model, 'time_off') ?>

    <?php // echo $form->field($model, 'shns_off_user_id') ?>

    <?php // echo $form->field($model, 'shchd_off_user_id') ?>

    <?php // echo $form->field($model, 'apply_ds') ?>

    <?php // echo $form->field($model, 'apply_shch_user_id') ?>

    <?php // echo $form->field($model, 'date_on') ?>

    <?php // echo $form->field($model, 'time_on') ?>

    <?php // echo $form->field($model, 'shns_on_user_id') ?>

    <?php // echo $form->field($model, 'shchd_on_user_id') ?>

    <?php // echo $form->field($model, 'description_on') ?>

    <?php // echo $form->field($model, 'num_on') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
