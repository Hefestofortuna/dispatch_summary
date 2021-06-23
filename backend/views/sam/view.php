<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sam */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sam-view">

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
            'time_start',
            'time_finish',
            'sam_from_id',
            'subdivision_id',
            'station_id',
            'responsible_user_id',
            'reason',
            'description',
            'status:boolean',
            'user_id',
            'title_object',
            'sam_category_id',
            'level',
            'putdate_send',
            'time_send',
            'date_finish',
            'organization_id',
            'putdate_term',
        ],
    ]) ?>

</div>
