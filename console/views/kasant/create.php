<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kasant */

$this->title = 'Create Kasant';
$this->params['breadcrumbs'][] = ['label' => 'Kasants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
