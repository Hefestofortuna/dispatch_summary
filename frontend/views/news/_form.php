<?php

use kartik\editors\Summernote;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $file_model frontend\models\File */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= Summernote::widget([
        'model' => $model,
        'attribute' => 'content',
    ]); ?>
    <?= $form->field($file_model, 'filename[]')->widget(FileInput::className(),[
        'name' => 'attachment_51',
        'options' => [
            'multiple' => true
        ],
        'pluginOptions' => [
            'initialPreviewAsData'=>true,
            #'theme'=> 'explorer-fas',
            'showUpload' => false,
            'preferIconicPreview' => true,
            'browseLabel' => '',
            'removeLabel' => '',
            'mainClass' => 'input-group-lg',
            'initialPreview' => $files,
        ]
    ])
    ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
