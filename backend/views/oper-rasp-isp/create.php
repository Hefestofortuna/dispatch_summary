<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspIsp */

$this->title = 'Create Oper Rasp Isp';
$this->params['breadcrumbs'][] = ['label' => 'Oper Rasp Isps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oper-rasp-isp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
