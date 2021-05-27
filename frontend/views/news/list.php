<?php

use frontend\models\News;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\widgets\Pjax;

/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';

echo '<h1 class="font-weight-light">Новости</h1>';

    Pjax::begin();

    #echo $this->render('_search', ['model' => $searchModel]);

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_news',
    'summary' => '',
]);

Pjax::end();