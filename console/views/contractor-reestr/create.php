<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractorReestr */

$this->title = 'Create Contractor Reestr';
$this->params['breadcrumbs'][] = ['label' => 'Contractor Reestrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contractor-reestr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
