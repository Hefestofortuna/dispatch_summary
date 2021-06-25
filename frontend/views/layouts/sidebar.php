<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Диспетчерскй контроль </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php if(!Yii::$app->user->isGuest): ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/user_icon.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php
                        echo preg_replace('~^(\S++)\s++(\S)\S++\s++(\S)\S++$~u', '$1 $2.$3.', Yii::$app->user->identity->name);
                    ?></a>
            </div>
        </div>
        <?php endif; ?>
        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Новости',
                        'icon' => 'digital-tachograph',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Новости', 'url' => ['news/list'], 'iconStyle' => 'far'],
                            ['label' => 'Окна', 'url' => ['windows/index'], 'iconStyle' => 'far'],
                            ['label' => 'Выключения', 'url' => ['windows/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    /*['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],*/
                    ['label' => 'Группы', 'header' => true],
                    [
                            'label' => 'Отчеты', 'icon' => 'chart-bar',
                        'items' => [
                            ['label' => 'Перемещения работников', 'iconStyle' => 'far'],
                            ['label' => 'Дежурный штат', 'iconStyle' => 'far',],
                            ['label' => 'Статистика по состоянию работников', 'iconStyle' => 'far'],
                            ['label' => 'Справка по ДГА', 'iconStyle' => 'far'],
                            ['label' => 'Повторные инструктажи', 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Кадровые данные','icon' => 'briefcase',
                        'items' => [
                            ['label' => 'Учет переработки', 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                            'label' => 'Справочники',
                            'icon' => 'book',
                            'items' => [
                                ['label' => 'Автотранспорт', 'iconStyle' => 'far'],
                                ['label' => 'Журнал подрядных организаций', 'iconStyle' => 'far'],
                                ['label' => 'Рельсовые цепий', 'iconStyle' => 'far'],
                            ]
                    ],
                    [
                            'label' => 'Документация',
                            'icon' => 'paste',
                            'items' => [
                                ['label' => 'Охрана труда', 'iconStyle' => 'far'],
                                ['label' => 'Технический отдел', 'iconStyle' => 'far'],
                                ['label' => 'Техническая документация', 'iconStyle' => 'far'],
                                ['label' => 'Экономический отдел', 'iconStyle' => 'far'],
                                ['label' => 'Диспетчерский отдел', 'iconStyle' => 'far'],
                                ['label' => 'Техническая учеба', 'iconStyle' => 'far'],
                                ['label' => 'Профком', 'iconStyle' => 'far'],
                                ['label' => 'Пожарная безопасность', 'iconStyle' => 'far'],
                                ['label' => 'Подведение итогов', 'iconStyle' => 'far'],
                                ['label' => 'НТД', 'iconStyle' => 'far'],
                                ['label' => 'Общественный контроль', 'iconStyle' => 'far'],
                                ['label' => 'Информационная безопасность', 'iconStyle' => 'far'],
                                ['label' => 'Пользователи', 'iconStyle' => 'far'],
                                ['label' => 'Персонал', 'iconStyle' => 'far'],
                                ['label' => 'Прочее', 'iconStyle' => 'far'],
                            ]
                    ],
                    ['label' => 'Проишествия', 'header' => true],
                    ['label' => 'Критичное', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    ['label' => 'Важное', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Информирование', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>