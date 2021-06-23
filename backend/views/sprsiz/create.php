<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSiz */

$this->title = 'Create Spr Siz';
$this->params['breadcrumbs'][] = ['label' => 'Spr Sizs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-siz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
