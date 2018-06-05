<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
