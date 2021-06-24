<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectroTrans */

$this->title = 'Create Spr Electro Trans';
$this->params['breadcrumbs'][] = ['label' => 'Spr Electro Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-electro-trans-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
