<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Notice */

$this->title = 'Create Notice';
$this->params['breadcrumbs'][] = ['label' => 'Notices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
