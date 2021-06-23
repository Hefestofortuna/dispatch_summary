<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Briefing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="briefing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_user_id')->textInput() ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'instructor_user_id')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'period')->textInput() ?>

    <?= $form->field($model, 'putdate_next')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
