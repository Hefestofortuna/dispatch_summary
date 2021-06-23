<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WindowapplicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="windowapplication-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dnc') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'way') ?>

    <?php // echo $form->field($model, 'km') ?>

    <?php // echo $form->field($model, 'picket') ?>

    <?php // echo $form->field($model, 'shutdown')->checkbox() ?>

    <?php // echo $form->field($model, 'fio_main') ?>

    <?php // echo $form->field($model, 'fio_bd') ?>

    <?php // echo $form->field($model, 'representative')->checkbox() ?>

    <?php // echo $form->field($model, 'sign')->checkbox() ?>

    <?php // echo $form->field($model, 'shutdown_voltage')->checkbox() ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'fio_shchd') ?>

    <?php // echo $form->field($model, 'written')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
