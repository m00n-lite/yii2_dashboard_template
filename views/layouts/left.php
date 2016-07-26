<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?=Html::img(Yii::$app->user->identity->profile->getAvatarUrl(230), [
                                    'class' => 'img-circle',
                                    'alt'   => Yii::$app->user->identity->profile->name.' '.Yii::$app->user->identity->profile->surname,
                                ]);
                ?>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->profile->name.' '.Yii::$app->user->identity->profile->surname;?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> <?=\Yii::t('user', 'Online')?></a>
            </div>
        </div>
        <? if(Yii::$app->user->identity->getIsAdmin()):?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Admin Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Users', 'icon' => 'fa fa-users', 'url' => ['/user/admin/index']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>
      <? endif;?>
      <?= dmstr\widgets\Menu::widget(
          [
              'options' => ['class' => 'sidebar-menu'],
              'items' => [
                  ['label' => 'Menu', 'options' => ['class' => 'header']],
                  [
                      'label' => 'Werbung',
                      'icon' => 'fa fa-share',
                      'url' => '#',
                      'items' => [
                          ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                          ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                          [
                              'label' => 'Level One',
                              'icon' => 'fa fa-circle-o',
                              'url' => '#',
                              'items' => [
                                  ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                  [
                                      'label' => 'Level Two',
                                      'icon' => 'fa fa-circle-o',
                                      'url' => '#',
                                      'items' => [
                                          ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                          ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                      ],
                                  ],
                              ],
                          ],
                      ],
                  ],
              ],
          ]
      ) ?>
    </section>

</aside>
