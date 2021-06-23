<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialInspect */

$this->title = 'Create Social Inspect';
$this->params['breadcrumbs'][] = ['label' => 'Social Inspects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-inspect-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
