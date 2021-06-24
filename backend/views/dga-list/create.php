<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DgaList */

$this->title = 'Create Dga List';
$this->params['breadcrumbs'][] = ['label' => 'Dga Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dga-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
