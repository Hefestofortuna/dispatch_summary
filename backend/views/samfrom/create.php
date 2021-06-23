<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SamFrom */

$this->title = 'Create Sam From';
$this->params['breadcrumbs'][] = ['label' => 'Sam Froms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sam-from-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
