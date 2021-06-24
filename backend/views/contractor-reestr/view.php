<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractorReestr */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contractor Reestrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contractor-reestr-view">

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
            'contractor_id',
            'station_id',
            'date_start',
            'date_finish',
            'notice',
            'ppr',
            'act_dopusk',
            'naryad_dopusk',
            'act_kabel',
            'otv_isp_info',
            'otv_ruk_info',
            'nadzor_doc',
            'nadrzor_otv',
            'title',
            'haracter',
            'organization_id',
        ],
    ]) ?>

</div>
