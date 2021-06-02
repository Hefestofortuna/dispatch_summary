<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\File */
/* @var $file_model frontend\models\File */
/* @var $form yii\widgets\ActiveForm */
/* @var $this yii\web\View */
/* @var $model app\models\File */

$this->title = 'Create File';
$this->params['breadcrumbs'][] = ['label' => 'Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-create">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="file-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'news_id')->textInput() ?>

        <?= $form->field($model, 'filename[]')->widget(FileInput::className(),[
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
            ]
        ])
        ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
