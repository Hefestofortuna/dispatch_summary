<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fail */

$this->title = 'Create Fail';
$this->params['breadcrumbs'][] = ['label' => 'Fails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
