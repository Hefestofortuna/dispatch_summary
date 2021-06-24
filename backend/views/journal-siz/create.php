<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalSiz */

$this->title = 'Create Journal Siz';
$this->params['breadcrumbs'][] = ['label' => 'Journal Sizs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="journal-siz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
