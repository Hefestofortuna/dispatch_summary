<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Windowapplication */

$this->title = 'Create Windowapplication';
$this->params['breadcrumbs'][] = ['label' => 'Windowapplications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="windowapplication-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
