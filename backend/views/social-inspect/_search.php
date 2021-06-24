<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialInspectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="social-inspect-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_find') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'comment') ?>

    <?= $form->field($model, 'service_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'who_give') ?>

    <?php // echo $form->field($model, 'date_last') ?>

    <?php // echo $form->field($model, 'date_fix') ?>

    <?php // echo $form->field($model, 'who_control') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
