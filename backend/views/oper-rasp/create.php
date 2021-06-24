<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRasp */

$this->title = 'Create Oper Rasp';
$this->params['breadcrumbs'][] = ['label' => 'Oper Rasps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oper-rasp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
