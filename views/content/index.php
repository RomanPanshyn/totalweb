<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Total Web Админка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Создать услугу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 contentdisplay">
            Категория:
            <?= Html::checkboxList('Категории', null, ArrayHelper::map($categoriesall, 'name', 'name'),
            ['class' => 'categorycheckboxlist']) ?>
            <?php $form = ActiveForm::begin(); ?>
            <?php $catstr = implode(',', $categories); ?>
                <?= $form->field($categModel, 'names')->
                hiddenInput(['id' => 'selectedcategories', 'value' => $catstr,'readonly' => 'true'])->label(false); ?>
                <div class="form-group">
                    <?= Html::submitButton('Обновить',
                    ['class' => 'btn btn-success', 'id' => 'categoryrefresh', 'style' => ['display' => 'none']]) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 contentdisplay">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'name',
                    'category',
                    'price',
                    [
                        'attribute' => 'image',
                        'format' => 'html',
                        'value' => function($data) {
                                return Html::img($data->imageurl, ['height' => '80']);
                            },
                    ],
                    'description:ntext',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
