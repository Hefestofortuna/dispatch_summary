<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WindowSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="window-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'organization') ?>

    <?= $form->field($model, 'work') ?>

    <?= $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'plan') ?>

    <?php // echo $form->field($model, 'hozed') ?>

    <?php // echo $form->field($model, 'leader') ?>

    <?php // echo $form->field($model, 'spec') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'transfer_user_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
