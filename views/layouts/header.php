<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini"></span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?
                                echo Html::img(Yii::$app->user->identity->profile->getAvatarUrl(230), [
                                    'class' => 'user-image',
                                    'alt'   => Yii::$app->user->identity->profile->name.' '.Yii::$app->user->identity->profile->surname,
                                ]);
                        ?>
                        <span class="hidden-xs"><?=Yii::$app->user->identity->profile->name.' '.Yii::$app->user->identity->profile->surname;?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?
                                echo Html::img(Yii::$app->user->identity->profile->getAvatarUrl(230), [
                                    'class' => 'img-circle',
                                    'alt'   => Yii::$app->user->identity->profile->name.' '.Yii::$app->user->identity->profile->surname,
                                ]);
                            ?>
                            <p>
                            <?
                                echo Yii::$app->user->identity->profile->name.' '.Yii::$app->user->identity->profile->surname.'
                                <small>'
                                .Yii::t('user', 'Joined on {0, date}', Yii::$app->user->identity->created_at).
                                '</small>';
                            ?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <!-- Some Text -->
                            </div>
                            <div class="col-xs-4 text-center">
                                <!-- Some Text -->
                            </div>
                            <div class="col-xs-4 text-center">
                                <!-- Some Text -->
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <?=Html::a('Profile',['/user/settings/profile'],['class' => 'btn btn-default btn-flat'])?>
                            </div>
                            <div class="pull-right">
                                <?=Html::a('Sign out',['/user/security/logout'],['data-method' => 'post', 'class' => 'btn btn-default btn-flat'])?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <?/*  echo Nav::widget([
            'items' => [
                ['label' => 'Sign in', 'url' => ['/user/security/login'],'visible' => Yii::$app->user->isGuest],
                ['label' => 'Register', 'url' => ['/user/registration/register'],'visible' => Yii::$app->user->isGuest],
                ['label' => Html::img(Yii::$app->user->identity->profile->getAvatarUrl(230), [
            'class' => 'user-image',
            'alt'   => Yii::$app->user->identity->profile->name,
        ]) .Html::tag('span', Yii::$app->user->identity->profile->name, ['class'=>'hidden-xs']),

                    'items' => [
                    '<!-- User image -->
                    <li class="user-header">'.
                        Html::img(Yii::$app->user->identity->profile->getAvatarUrl(230), [
                            'class' => 'img-circle',
                            'alt'   => Yii::$app->user->identity->profile->name,
                        ]).
                        '<p>
                            '.Yii::$app->user->identity->profile->name.'
                            <small>'.Yii::t('user', 'Joined on {0, date}', Yii::$app->user->identity->created_at).'</small>
                        </p>
                    </li>
                    <li class="user-footer">
                    <div class="pull-left">'.
                        Html::a('Profile',['/user/profile'],['class' => 'btn btn-default btn-flat']).'
                    </div>
                    <div class="pull-right">'.
                        Html::a('Sign out',['/user/security/logout'],['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                        ).'
                    </div>
                </li>',

                    ],
                    'options' => [
                        'class' => 'dropdown user user-menu',
                    ],
                ],
            ],
            'encodeLabels' => false,
            'options' => [
                'class' => 'nav navbar-nav',
            ]
            ]);*/?>
    </nav>
</header>
