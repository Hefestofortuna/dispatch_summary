<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Ors */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'station_id',
            'sum_main_pch',
            'sum_main_shch',
            'sum_main',
            'putdate',
            'sum_minor_pch',
            'sum_minor_shch',
            'sum_minor',
            'subdivision_id',
            'description',
        ],
    ]) ?>

</div>
