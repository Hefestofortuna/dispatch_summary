<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSpt */

$this->title = 'Create Spr Spt';
$this->params['breadcrumbs'][] = ['label' => 'Spr Spts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-spt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
