<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Work */

$this->title = 'Create Work';
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
