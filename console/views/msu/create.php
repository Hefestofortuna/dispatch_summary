<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Msu */

$this->title = 'Create Msu';
$this->params['breadcrumbs'][] = ['label' => 'Msus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="msu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
