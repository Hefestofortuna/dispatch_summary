<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspSam */

$this->title = 'Create Oper Rasp Sam';
$this->params['breadcrumbs'][] = ['label' => 'Oper Rasp Sams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oper-rasp-sam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
