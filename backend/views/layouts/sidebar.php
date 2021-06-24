<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/site/index/" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Админ-Панель</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->identity->name ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Главная',
                        'icon' => 'tachometer-alt',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Все модули', 'url' => ['site/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    ['label' => 'Генераторы', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Дебаг-панель', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ['label' => 'Модули', 'header' => true],
                    [
                        'label' => 'Пользователи',
                        'items' => [
                            ['label' => 'Все пользователи', 'iconStyle' => 'far','url' => ['/user/index/']],
                        ]
                    ],
                    ['label' => 'Категории', 'header' => true],
                    ['label' => 'На контроле', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    ['label' => 'Важные', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Информационные', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>