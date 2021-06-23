<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SamCategory */

$this->title = 'Create Sam Category';
$this->params['breadcrumbs'][] = ['label' => 'Sam Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sam-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
