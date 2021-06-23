<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectroObj */

$this->title = 'Create Spr Electro Obj';
$this->params['breadcrumbs'][] = ['label' => 'Spr Electro Objs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-electro-obj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
