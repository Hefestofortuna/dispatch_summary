<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
