<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalIzolControl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-izol-control-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'journal_izol_id')->textInput() ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'r_izol')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
