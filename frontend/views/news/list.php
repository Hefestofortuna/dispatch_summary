<?php

use frontend\models\News;
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;

/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel yii\data\ActiveDataProvider */

$this->title = 'Новости';

echo '<h1 class="font-weight-light">Новости</h1>';
echo Html::a('Добавить', ['create'], ['class' => 'btn btn-success']);
echo "<p>";

#Pjax::begin();

#echo $this->render('_search', ['model' => $searchModel]);

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_news',
    'summary' => false,
    'layout' => "<div class='card-columns'>{items}</div>\n<br>{pager}",
    'itemOptions' => [
        'tag' => false,
    ],
    'options'=>[
        'tag' => 'div',
        'class' =>'list-view',
    ],

]);

#Pjax::end();

