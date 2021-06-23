<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IncomingSamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incoming-sam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'docs') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'isp_user_id') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
