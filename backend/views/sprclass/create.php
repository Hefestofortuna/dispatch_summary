<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprClass */

$this->title = 'Create Spr Class';
$this->params['breadcrumbs'][] = ['label' => 'Spr Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
