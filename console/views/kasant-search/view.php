<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KasantSearch */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kasant Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kasant-search-view">

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
            'place',
            'cause',
            'time_start',
            'time_finish',
            'time_total',
            'service',
            'resolution',
            'count',
            'time_delay',
            'user_id',
            'organization_id',
        ],
    ]) ?>

</div>
