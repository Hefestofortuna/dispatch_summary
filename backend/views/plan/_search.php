<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'putdate') ?>

    <?= $form->field($model, 'work') ?>

    <?= $form->field($model, 'station') ?>

    <?= $form->field($model, 'subdivision') ?>

    <?php // echo $form->field($model, 'expired') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <?php // echo $form->field($model, 'work_plan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
