<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IncomingSam */

$this->title = 'Create Incoming Sam';
$this->params['breadcrumbs'][] = ['label' => 'Incoming Sams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incoming-sam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
