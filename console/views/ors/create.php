<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ors */

$this->title = 'Create Ors';
$this->params['breadcrumbs'][] = ['label' => 'Ors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
