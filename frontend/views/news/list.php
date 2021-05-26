<?php

use frontend\models\News;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';

echo '<h1 class="font-weight-light">Новости</h1>';

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_news',
    'summary' => '',
]);