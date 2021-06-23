<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSptType */

$this->title = 'Create Spr Spt Type';
$this->params['breadcrumbs'][] = ['label' => 'Spr Spt Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-spt-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
