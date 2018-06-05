<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div data-key="<?= $model->id; ?>">
    <h1>
        <?= Html::a(Html::img($model->imageurl, ['width' => '150']), ['view', 'id' => $model->id]) ?>
        <?= Html::encode($model->id); ?>
    </h1>

    <p><b>Категория: </b><?= Html::encode($model->category); ?></p>
    <p><b>Цена: </b><h2><?= Html::encode($model->price); ?></h2></p>
    <p><b>Описание: </b><?= Html::encode($model->description); ?></p>
</div>
