<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */
/* @var $file_model frontend\models\File */

$this->title = 'Добавить новость';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'file_model' => $file_model,
    ]) ?>

</div>
