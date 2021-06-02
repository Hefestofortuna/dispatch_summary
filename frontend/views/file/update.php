<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\File */
/* @var $file_model frontend\models\File */
/* @var $form yii\widgets\ActiveForm */
/* @var $this yii\web\View */
/* @var $model frontend\models\File */
/* @var $file_model frontend\models\File */
/* @var $file_config frontend\models\File */

$this->title = 'Update File: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="file-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'news_id')->textInput() ?>
        <?= $form->field($model, 'filename')->widget(FileInput::className(),[
            'name' => 'attachment_51',
            'pluginOptions' => [
                'initialPreviewAsData'=>true,
                'preferIconicPreview' => true,
                'showUpload' => false,
                'browseLabel' => '',
                'removeLabel' => '',
                'mainClass' => 'input-group-lg',
                'initialPreviewConfig' =>[
                    [
                        'caption' => $file_config['filename'],
                        'url' => false,
                        'downloadUrl' => Url::base(true) . '/' . $file_config['filepath'],
                    ],
                ],
                'initialPreview' => $file_model,
            ]
        ])
        ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
