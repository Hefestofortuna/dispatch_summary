<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FailUser */

$this->title = 'Create Fail User';
$this->params['breadcrumbs'][] = ['label' => 'Fail Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fail-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
