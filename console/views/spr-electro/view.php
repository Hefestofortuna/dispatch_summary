<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SprElectro */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Spr Electros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="spr-electro-view">

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
            'subdivision_id',
            'spr_electro_type_id',
            'spr_electro_obj_id',
            'fider_type',
            'place',
            'number',
            'spr_electro_trans_id',
            'organization_id',
            'active:boolean',
        ],
    ]) ?>

</div>
