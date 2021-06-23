<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Otdel */

$this->title = 'Create Otdel';
$this->params['breadcrumbs'][] = ['label' => 'Otdels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otdel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
