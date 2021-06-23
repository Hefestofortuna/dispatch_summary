<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialInspect */

$this->title = 'Update Social Inspect: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Social Inspects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="social-inspect-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
