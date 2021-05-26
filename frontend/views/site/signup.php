<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

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
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'reinstruction')->checkbox() ?>

                <?= $form->field($model, 'organization_id')->dropdownList(ArrayHelper::map(Organization::find()->all(),'id','title')) ?>

                <?= $form->field($model, 'subdivision_id')->dropdownList(ArrayHelper::map(Subdivision::find()->all(),'id','title')) ?>

                <?= $form->field($model, 'name')->textInput() ?>

                <?= $form->field($model, 'post_id')->textInput() ?>

                <?= $form->field($model, 'description')->textInput() ?>

                <?= $form->field($model, 'phone')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
