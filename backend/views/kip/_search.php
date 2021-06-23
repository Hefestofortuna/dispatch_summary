<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KipSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kip-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'plan') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'count_sent') ?>

    <?php // echo $form->field($model, 'count_install') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <?php // echo $form->field($model, 'date_install') ?>

    <?php // echo $form->field($model, 'date_ship') ?>

    <?php // echo $form->field($model, 'subdivision_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
