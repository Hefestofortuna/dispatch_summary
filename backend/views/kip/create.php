<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kip */

$this->title = 'Create Kip';
$this->params['breadcrumbs'][] = ['label' => 'Kips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kip-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
