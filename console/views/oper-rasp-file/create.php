<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspFile */

$this->title = 'Create Oper Rasp File';
$this->params['breadcrumbs'][] = ['label' => 'Oper Rasp Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oper-rasp-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
