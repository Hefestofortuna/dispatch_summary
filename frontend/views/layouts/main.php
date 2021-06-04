<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= Url::base(true) ?>/css/all.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
        ],
    ]);
    $menuItems = [
        ['label' => 'Новости', 'url' => ['/news/list']],
        ['label' => 'О проекте', 'url' => ['/site/about']],
        ['label' => 'Обратная связь', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container" style="padding-top: 10px">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></div>
        <div class="float-right"><?php
            Modal::begin([
                'title' => 'Команда сопровождения проекта',
                'size' => 'modal-lg',
                'bodyOptions' =>[
                        'style' => 'modal-xl',
                ],
                'toggleButton' => [
                        'label' => 'Команда',
                        'tag' => 'label',
                ],
            ]);
            echo '
            <table class="table" style="margin-top: -16px;">
              <thead>
                <tr>
                  <th scope="col">ФИО</th>
                  <th scope="col">Телефон</th>
                  <th scope="col">Вопрос</th>
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td>Кратуев Иван Николаевич</td>
                  <td>89021633429</td>
                  <td>Вопросы по исправлению ПО</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                  <td>Агафонов Тимофей Борисович</td>
                  <td>89021635572</td>
                  <td>Вопросы по сопровождению проекта</td>
                </tr>
            </tbody>
            </table>
            ';

            Modal::end();
            ?></div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
