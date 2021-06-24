<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SprAutoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spr-auto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'date_check') ?>

    <?php // echo $form->field($model, 'ts_reestr') ?>

    <?php // echo $form->field($model, 'ts_class') ?>

    <?php // echo $form->field($model, 'fuel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
