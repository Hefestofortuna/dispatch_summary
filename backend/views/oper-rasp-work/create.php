<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspWork */

$this->title = 'Create Oper Rasp Work';
$this->params['breadcrumbs'][] = ['label' => 'Oper Rasp Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oper-rasp-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
