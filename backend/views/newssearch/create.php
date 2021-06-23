<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsSearch */

$this->title = 'Create News Search';
$this->params['breadcrumbs'][] = ['label' => 'News Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-search-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
