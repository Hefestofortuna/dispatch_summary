<?php

use yii\helpers\Html;
use kartik\editors\Summernote;
use kartik\file\FileInput;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $file_model frontend\models\File */
/* @var $file_model_form frontend\models\File */
/* @var $form yii\widgets\ActiveForm */
/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = 'Update News: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="news-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


        <?= Summernote::widget([
            'model' => $model,
            'attribute' => 'content',
            'container' => [

            ],
        ]); ?>

        <?= $form->field($file_model_form, 'filename[]')->widget(FileInput::className(),[
            'name' => 'attachment_51',
            'options' => [
                'multiple' => true
            ],
            'pluginOptions' => [
                'initialPreviewAsData'=>true,
                #'theme'=> 'explorer-fas',
                'showUpload' => false,
                'preferIconicPreview' => true,
                'browseLabel' => 'Добавить к существующим',
                'removeLabel' => '',
                'mainClass' => 'input-group-lg',
                'initialPreview' => $file_model,
                'initialPreviewConfig' =>$file_config,
            ]
        ])
        ?>

        <br>
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
