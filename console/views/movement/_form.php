<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Movement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pubdate')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'work1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'work2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'duty')->checkbox() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
