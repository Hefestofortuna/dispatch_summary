<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-revision-ot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'date_rev')->textInput() ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'revisor')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'upload')->checkbox() ?>

    <?= $form->field($model, 'result')->textInput() ?>

    <?= $form->field($model, 'rev_user_id')->textInput() ?>

    <?= $form->field($model, 'first_kom_user_id')->textInput() ?>

    <?= $form->field($model, 'second_kom_user_id')->textInput() ?>

    <?= $form->field($model, 'time_rev')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
