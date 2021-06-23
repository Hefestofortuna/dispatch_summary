<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */

$this->title = 'Update User Search: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-search-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
