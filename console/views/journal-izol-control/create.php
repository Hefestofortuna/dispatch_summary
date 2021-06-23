<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalIzolControl */

$this->title = 'Create Journal Izol Control';
$this->params['breadcrumbs'][] = ['label' => 'Journal Izol Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-izol-control-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
