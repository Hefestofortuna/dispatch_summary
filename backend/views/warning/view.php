<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Warning */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Warnings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="warning-view">

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
            'place',
            'description',
            'date_work',
            'time_from',
            'time_to',
            'date_arm',
            'user_id',
            'time_arm',
            'arm_user_id',
            'organization_id',
            'pub_date',
            'number',
        ],
    ]) ?>

</div>
