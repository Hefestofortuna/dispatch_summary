<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Briefing */

$this->title = 'Create Briefing';
$this->params['breadcrumbs'][] = ['label' => 'Briefings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="briefing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
