<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rc */

$this->title = 'Create Rc';
$this->params['breadcrumbs'][] = ['label' => 'Rcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
