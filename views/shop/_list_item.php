<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="col-lg-4 col-md-4 col-sm-4 shopitem" data-key="<?= $model->id; ?>">
    <h1>
        <?= Html::a(Html::img($model->imageurl, ['width' => '120']), ['view', 'id' => $model->id]) ?>
        <?= Html::encode($model->id); ?>
    </h1>

    <p><b>Категория: </b><?= Html::encode($model->category); ?></p>
    <p><b>Цена: </b><h3><?= Html::encode($model->price); ?></h3></p>
    <p>
        <?= Html::a('Купить', ['/shop/index'],
        ['class' => 'btn btn-lg btn-success',
         'style' => ['padding' => '10px 10px', 'font-size' => '18px']]) ?>
    </p>
    <p><b>Описание: </b><?= Html::encode($model->description); ?></p>
</div>
