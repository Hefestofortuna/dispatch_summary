<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Autotransport */

$this->title = 'Create Autotransport';
$this->params['breadcrumbs'][] = ['label' => 'Autotransports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autotransport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
