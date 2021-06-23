<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sam */

$this->title = 'Create Sam';
$this->params['breadcrumbs'][] = ['label' => 'Sams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
