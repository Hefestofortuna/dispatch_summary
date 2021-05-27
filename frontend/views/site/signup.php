<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */
/* @var $data \frontend\controllers\SiteController */

use frontend\models\Subdivision;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use frontend\models\Organization;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста, заполните следующие поля для регистрации:</p>

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'name')->textInput() ?>
        </div>

        <div class="col-lg-6">
            <?php $model->organization_id = $data; ?>
            <?= $form->field($model, 'organization_id')->dropdownList(ArrayHelper::map(Organization::find()->all(),'id','title')) ?>

            <?= $form->field($model, 'subdivision_id')->dropdownList(ArrayHelper::map(Subdivision::find()->all(),'id','title')) ?>

            <?= $form->field($model, 'post_id')->textInput() ?>

            <?= $form->field($model, 'phone')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
