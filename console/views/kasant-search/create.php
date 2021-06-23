<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KasantSearch */

$this->title = 'Create Kasant Search';
$this->params['breadcrumbs'][] = ['label' => 'Kasant Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasant-search-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
