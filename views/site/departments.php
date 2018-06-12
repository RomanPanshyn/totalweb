<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Total Web Отделы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-departments">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел PR', ['/departments/pr'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Медиа', ['/departments/media'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Копирайтера', ['/departments/copyright'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Продвижения', ['/departments/promotion'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Маркетинг', ['/departments/marketing'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Продаж', ['/departments/sales'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел HR', ['/departments/hr'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Бухгалтерии', ['/departments/accounting'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Юридический', ['/departments/law'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Разработки', ['/departments/development'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 departments">
            <?= Html::a('Отдел Аналитический: масштабирования и стратегического развития', ['/departments/analytic'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Инфраструктуры', ['/departments/infrastructure'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Коуч', ['/departments/coach'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Партнёрства', ['/departments/partnership'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 departments">
            <?= Html::a('Отдел Монетизации', ['/departments/monetization'],
             ['class' => 'btn btn-lg btn-info',
              'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        </div>
    </div>
</div>
