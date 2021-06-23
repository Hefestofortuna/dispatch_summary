<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WarningSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warning-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'date_work') ?>

    <?php // echo $form->field($model, 'time_from') ?>

    <?php // echo $form->field($model, 'time_to') ?>

    <?php // echo $form->field($model, 'date_arm') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'time_arm') ?>

    <?php // echo $form->field($model, 'arm_user_id') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <?php // echo $form->field($model, 'pub_date') ?>

    <?php // echo $form->field($model, 'number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
