<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprBalance */

$this->title = 'Create Spr Balance';
$this->params['breadcrumbs'][] = ['label' => 'Spr Balances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-balance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
