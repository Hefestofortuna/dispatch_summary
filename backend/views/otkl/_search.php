<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OtklSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otkl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'time_from') ?>

    <?= $form->field($model, 'time_to') ?>

    <?= $form->field($model, 'station_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'object') ?>

    <?php // echo $form->field($model, 'transfer_user_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
