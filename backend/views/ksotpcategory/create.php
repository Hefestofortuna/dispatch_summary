<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KsotpCategory */

$this->title = 'Create Ksotp Category';
$this->params['breadcrumbs'][] = ['label' => 'Ksotp Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ksotp-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
