<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Fail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fail-view">

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
            'putdate',
            'date_start',
            'time_start',
            'date_finish',
            'time_finish',
            'service_id',
            'description',
            'subdivision_id',
            'user_id',
            'character',
            'station_id',
            'fail_user_id',
            'organization_id',
            'system:boolean',
        ],
    ]) ?>

</div>
