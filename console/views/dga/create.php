<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dga */

$this->title = 'Create Dga';
$this->params['breadcrumbs'][] = ['label' => 'Dgas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
