<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MovementSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movement-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pubdate') ?>

    <?= $form->field($model, 'subdivision_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'work1') ?>

    <?php // echo $form->field($model, 'work2') ?>

    <?php // echo $form->field($model, 'duty')->checkbox() ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
