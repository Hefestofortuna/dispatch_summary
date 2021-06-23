<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalSpt */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Journal Spts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="journal-spt-view">

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
            'date_create',
            'time_create',
            'character',
            'reported',
            'spr_spt_id',
            'date_to',
            'time_to',
            'pers_to',
            'date_finish',
            'time_finish',
            'pers_finish',
            'description',
            'status',
            'shd_finish',
            'organization_id',
        ],
    ]) ?>

</div>
