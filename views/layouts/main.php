<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
     echo Nav::widget([
         'options' => ['class' => 'navbar-nav navbar-right'],
         'items' => [
             Yii::$app->user->id === '100' ? (
                 ['label' => 'Админка', 'url' => ['/content/index']]
             ) : (
                 ['label' => '']
             ),
             Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/site/login']]
                ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                     'Выйти (' . Html::encode(Yii::$app->user->identity->username) . ')',
                        ['class' => 'btn btn-link logout']
                    )
                . Html::endForm()
                . '</li>'
             ),
             ['label' => 'Корзина', 'url' => ['/shop/cart']],
             ['label' => 'Оплатить', 'url' => ('https://send.monobank.com.ua/341DzrZXw'),
                 'linkOptions' => ['target' => '_blank']],
             ['label' => Html::img('@web/images/logoiconwhite.png',
             ['alt'=>Yii::$app->name, 'style' => ['height' => '40px',
              'margin-top' => '-15px',
              'margin-bottom' => '-5px',
             ]
         ]), 'url' => ['/site/departments']],
         ],
         'encodeLabels' => false,
     ]);
    NavBar::end();
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logoiconwhite.png',
        ['alt'=>Yii::$app->name, 'style' => ['width' => '120px',
         'margin-left' => '-10px',
         'margin-top' => '-15px',
        ]
        ]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-left',//navbar-fixed-top
            'style' => [
                //'padding' => '0',
            ],
        ],
    ]);
     echo Nav::widget([
        //'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' =>  '<hr class="menu-hr1">'],
            ['label' => 'Главная', 'url' => ['/site/index'],
                //'options' => ['style' => ['margin-top' => '100px']],
            ],
            ['label' => 'Агенство', 'url' => ['/site/company']],
            ['label' => 'Команда', 'url' => ['/site/team']],
            ['label' => 'Услуги', 'url' => ['/shop/index']],
            ['label' => 'Клиенты', 'url' => ['/site/clients']],
            ['label' => 'Отзывы', 'url' => ['/site/reviews']],
            ['label' => 'Магазин', 'url' => ['/site/offers']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Вакансии', 'url' => ['/site/vacancies']],
            ['label' => 'Блог', 'url' => ['/site/blog']],
            ['label' => 'FAQ', 'url' => ['/site/faq']],
            ['label' => '<hr class="menu-hr2">'],
            ['label' => '+380965553946', 'url' => ('tel:+380965553946'), 'options' => ['style' => [
                'font-size' => '16px',
                'margin-left' => '-15px',
                'margin-top' => '-30px',
                ]]],
            ['label' => 'totalweb@ukr.net', 'url' => ('mailto:totalweb@ukr.net'), 'options' => ['style' => [
                'font-size' => '14px',
                'margin-left' => '-5px',
                ]]],
            ['label' =>  Html::img('@web/images/skypelogo.png',
                ['alt' => 'Skype', 'style' => ['width' => '80px',
                    //'margin-left' => '-10px',
                    //'margin-top' => '-15px',
                    ]
                ]), 'url' => ('skype:live:totalweb_4?chat')],
            ['label' => '<hr class="menu-hr3">'],
            ['label' => Html::img('@web/images/googlepluslogo.png',
                ['alt' => 'Google+', 'style' => ['width' => '40px',
                'margin-left' => '15px',
                'margin-top' => '-50px',
                ]])],
            ['label' => Html::img('@web/images/vklogo.png',
                ['alt' => 'Vk', 'style' => ['width' => '35px',
                'margin-left' => '20px',
                'margin-top' => '-10px',
                ]])],
            ['label' => Html::img('@web/images/twitterlogo.png',
                ['alt' => 'Twitter', 'style' => ['width' => '45px',
                'margin-left' => '15px',
                ]]), 'url' => ('https://twitter.com/TotalWebAgency'),
                'linkOptions' => ['target' => '_blank']],
            ['label' => Html::img('@web/images/facebooklogo.png',
                ['alt' => 'Facebook', 'style' => ['width' => '35px',
                'margin-left' => '20px',
                ]]), 'url' => ('https://www.facebook.com/Рекламное-Агентство-TotalWeb-162131377839394/'),
                'linkOptions' => ['target' => '_blank']],
            ['label' => Html::img('@web/images/oklogo.png',
                ['alt' => 'Одноклассники', 'style' => ['width' => '35px',
                'margin-left' => '15px',
                ]])],
            ['label' => Html::img('@web/images/telegramlogo.png',
                ['alt' => 'Telegram', 'style' => ['width' => '40px',
                'margin-left' => '15px',
                ]])],
            ['label' => Html::img('@web/images/viberlogo.png',
                ['alt' => 'Viber','style' => ['width' => '40px',
                'margin-left' => '15px',
                ]])],
            ['label' => Html::img('@web/images/whatsapplogo.png',
                ['alt' => 'WhatsApp', 'style' => ['width' => '40px',
                'margin-left' => '15px',
                ]])],
            ['label' => Html::img('@web/images/instagramlogo.png',
                ['alt' => 'Instagram', 'style' => ['width' => '50px',
                'margin-left' => '15px',
                ]]),'url' => ('https://www.instagram.com/totalwebmax/'),
                'linkOptions' => ['target' => '_blank']],
        ],
        'options' => ['class' =>'navbar-nav', 'style' =>
            [
            'font-size' => '18px',
            'margin-left' => '-25px',
            'margin-top' => '0px',
            ],
        ],
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container text-center">
        <p class="text-muted credit">&copy; Total Web <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
