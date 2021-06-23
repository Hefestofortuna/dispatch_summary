<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KasantSearchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kasant-search-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'cause') ?>

    <?= $form->field($model, 'time_start') ?>

    <?php // echo $form->field($model, 'time_finish') ?>

    <?php // echo $form->field($model, 'time_total') ?>

    <?php // echo $form->field($model, 'service') ?>

    <?php // echo $form->field($model, 'resolution') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'time_delay') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
