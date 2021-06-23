<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractorReestr */

$this->title = 'Update Contractor Reestr: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contractor Reestrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contractor-reestr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
