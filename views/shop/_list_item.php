<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 shopitem" data-key="<?= $model->id; ?>">
    <h1>
        <?= Html::a(Html::img($model->imageurl, ['height' => '85']), ['view', 'id' => $model->id]) ?>
        <?= Html::encode($model->id); ?>
    </h1>
    <p><b>Название: </b><?= Html::encode($model->name); ?></p>
    <p><b>Категория: </b><?= Html::encode($model->category); ?></p>
    <p><b>Цена: </b><?= Html::tag('span', Html::encode($model->price), ['class' => 'price']) ?></p>
    <p>
        <?= Html::a('Купить', ['/shop/index'],
        ['class' => 'btn btn-lg btn-success',
         'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
        <?= Html::a('Детально', ['/shop/view', 'id'=> $model->id],
        ['class' => 'btn btn-lg btn-primary',
         'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
    </p>
    <p><b>Описание: </b><?= Html::encode($model->description); ?></p>
</div>
