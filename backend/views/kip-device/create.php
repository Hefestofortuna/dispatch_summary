<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KipDevice */

$this->title = 'Create Kip Device';
$this->params['breadcrumbs'][] = ['label' => 'Kip Devices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kip-device-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
