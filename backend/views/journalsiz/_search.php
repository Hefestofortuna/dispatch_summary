<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalSizSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-siz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'subdivision_id') ?>

    <?= $form->field($model, 'num') ?>

    <?= $form->field($model, 'putdate') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
