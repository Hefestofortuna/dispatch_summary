<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSptSystem */

$this->title = 'Create Spr Spt System';
$this->params['breadcrumbs'][] = ['label' => 'Spr Spt Systems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-spt-system-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
