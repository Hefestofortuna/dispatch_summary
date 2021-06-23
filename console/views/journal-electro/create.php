<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalElectro */

$this->title = 'Create Journal Electro';
$this->params['breadcrumbs'][] = ['label' => 'Journal Electros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-electro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
