<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spr-electro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'spr_electro_type_id')->textInput() ?>

    <?= $form->field($model, 'spr_electro_obj_id')->textInput() ?>

    <?= $form->field($model, 'fider_type')->textInput() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spr_electro_trans_id')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
