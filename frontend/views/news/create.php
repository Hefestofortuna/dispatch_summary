<?php

use yii\helpers\Html;
use kartik\editors\Summernote;
use kartik\file\FileInput;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $file_model frontend\models\File */
/* @var $form yii\widgets\ActiveForm */
/* @var $this yii\web\View */
/* @var $model frontend\models\News */
/* @var $file_model frontend\models\File */

$this->title = 'Добавить новость';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

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
                'preferIconicPreview' => true,
                'showUpload' => false,
                'browseLabel' => '',
                'removeLabel' => '',
                'mainClass' => 'input-group-lg',
                'initialPreviewShowDelete' => false,
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
