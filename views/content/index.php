<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Total Web Интернет-магазин';
$this->params['breadcrumbs'][] = 'Услуги';
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Создать услугу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
        <div class="col-lg-2 contentdisplay">
            Категория:
            <?= Html::checkboxList('Категории', [0,1], $chosencategories, ['class' => 'categorycheckboxlist']) ?>
        </div>
        <div class="col-lg-10 contentdisplay">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'category',
                    'price',
                    [
                        'attribute' => 'image',
                        'format' => 'html',
                        'value' => function($data) {
                                return Html::img($data->imageurl, ['width' => '100']);
                            },
                    ],
                    'description:ntext',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
