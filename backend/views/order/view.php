<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

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
            'num_off',
            'station_id',
            'card_id',
            'description_off',
            'date_off',
            'time_off',
            'shns_off_user_id',
            'shchd_off_user_id',
            'apply_ds',
            'apply_shch_user_id',
            'date_on',
            'time_on',
            'shns_on_user_id',
            'shchd_on_user_id',
            'description_on',
            'num_on',
            'date',
            'organization_id',
        ],
    ]) ?>

</div>
