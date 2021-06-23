<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contractor */

$this->title = 'Create Contractor';
$this->params['breadcrumbs'][] = ['label' => 'Contractors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contractor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
