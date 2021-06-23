<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Otkl */

$this->title = 'Create Otkl';
$this->params['breadcrumbs'][] = ['label' => 'Otkls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otkl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
