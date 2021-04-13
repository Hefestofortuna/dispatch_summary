<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use kartik\date\DatePicker;


echo DatePicker::widget([
    'name' => 'today',
    'id' => 'today',
    'type' => DatePicker::TYPE_INPUT,
    'value' => date('d.m.Y'),
    'language' => 'ru',
    'pluginOptions' => [
        'todayHighlight' => true,
        'format' => 'dd.mm.yyyy',
    ]
]);
NavBar::begin([
    'brandLabel' => 'Диспетчерская сводка',
    'options' => [
        'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
    ],
]);

echo Nav::widget([
    'items' => [
        ['label' => 'Организация', 'url' => ['/organization/index']],
        ['label' => 'Подразделения', 'url' => ['/subdivision/index']],
        ['label' => 'Пользователь', 'url' => ['/user/index']],
        ['label' => 'Перемещение', 'url' => ['/movement/index']],


    ],
    'options' => ['class' => 'navbar-nav'],
]);
NavBar::end();
