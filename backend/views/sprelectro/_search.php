<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spr-electro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'subdivision_id') ?>

    <?= $form->field($model, 'spr_electro_type_id') ?>

    <?= $form->field($model, 'spr_electro_obj_id') ?>

    <?= $form->field($model, 'fider_type') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'spr_electro_trans_id') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <?php // echo $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
