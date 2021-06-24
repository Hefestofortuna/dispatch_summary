<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectro */

$this->title = 'Create Spr Electro';
$this->params['breadcrumbs'][] = ['label' => 'Spr Electros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-electro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
