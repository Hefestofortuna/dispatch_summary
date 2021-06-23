<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsUser */

$this->title = $model->news_id;
$this->params['breadcrumbs'][] = ['label' => 'News Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'news_id' => $model->news_id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'news_id' => $model->news_id, 'user_id' => $model->user_id], [
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
            'news_id',
            'user_id',
        ],
    ]) ?>

</div>
