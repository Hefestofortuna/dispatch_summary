<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */

$this->title = 'Create User Search';
$this->params['breadcrumbs'][] = ['label' => 'User Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-search-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
