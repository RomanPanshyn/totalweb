<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Купить', ['/shop/index'],
        ['class' => 'btn btn-lg btn-success',
         'style' => ['padding' => '20px 20px', 'font-size' => '25px']]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'category',
            'price',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($data) {
                        return Html::img($data->imageurl, ['width' => '200']);
                    },
            ],
            'description:ntext',
        ],
    ]) ?>

</div>
