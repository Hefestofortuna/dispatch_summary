<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Incoming */

$this->title = 'Create Incoming';
$this->params['breadcrumbs'][] = ['label' => 'Incomings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incoming-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
