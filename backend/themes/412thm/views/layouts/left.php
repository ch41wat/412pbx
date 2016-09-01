<aside class="main-sidebar">

    <section class="sidebar">
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        [
                            'label' => 'User Management',
                            'icon' => 'fa fa-group',
                            'url' => '#',
                            'items' => [
                                ['label' => 'User admin', 'icon' => 'fa fa-user', 'url' => ['/user/user/'],],
                                ['label' => 'SIP Users', 'icon' => 'fa fa-phone-square', 'url' => ['/sipusers/sipusers/']],
                            ],
                        ],
                        [
                            'label' => 'Route',
                            'icon' => 'fa fa-retweet',
                            'url' => '#',
                            'items' => [
                                ['label' => 'SIP Trunks', 'icon' => 'fa fa-hdd-o', 'url' => ['/siptrunks/siptrunks/'],],
                            ],
                        ],
                        [
                            'label' => 'Dialplan',
                            'icon' => 'fa fa-refresh',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Dialplan', 'icon' => 'fa fa-refresh', 'url' => ['/extension/extension'],],
                                ['label' => 'Time Condition', 'icon' => 'fa fa-clock-o', 'url' => ['/'],],
                                ['label' => 'Interactive Voice Recording', 'icon' => 'fa fa-sort-amount-asc', 'url' => ['/'],],
                            ],
                        ],
                        [
                            'label' => 'Reports',
                            'icon' => 'fa fa-list-ol',
                            'url' => '#',
                            'items' => [
                                ['label' => 'CDRs', 'icon' => 'fa fa-file-text-o', 'url' => ['/cdr/cdr/'],],
                            ],
                        ],
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ],
                ]
        )
        ?>


    </section>

</aside>
