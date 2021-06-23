<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Msu */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Msus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="msu-view">

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
            'date_setup',
            'switch',
            'power_supply',
            'msu_num',
            'msu_year',
            'msu_perevod_plus',
            'msu_perevod_min',
            'msu_friction_plus',
            'msu_friction_min',
            'emsu_perevod_plus',
            'emsu_perevod_min',
            'emsu_friction_plus',
            'emsu_friction_min',
            'emsu_usilie_friction_plus',
            'emsu_usilie_friction_min',
            'organization_id',
            'station_id',
            'subdivision_id',
            'user_id',
            'date_create',
        ],
    ]) ?>

</div>
