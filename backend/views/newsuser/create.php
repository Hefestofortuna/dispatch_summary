<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsUser */

$this->title = 'Create News User';
$this->params['breadcrumbs'][] = ['label' => 'News Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
