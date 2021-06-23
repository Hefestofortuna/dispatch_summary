<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Autotransport */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Autotransports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="autotransport-view">

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
            'date',
            'subdivision_id',
            'target',
            'contact_user_id',
            'user_id',
            'auto_id',
            'driver_user_id',
            'time_arrival',
            'time_departure',
            'odometr',
            'status:boolean',
            'organization_id',
        ],
    ]) ?>

</div>
