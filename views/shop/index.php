<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Total Web Интернет-магазин';
$this->params['breadcrumbs'][] = 'Услуги';
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="row">
        <div class="col-lg-2 contentdisplay">
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
        <div class="col-lg-10 contentdisplay">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{pager}\n{summary}\n{items}",                
                'itemOptions' => ['class' => 'col-lg-1 shopitem'],
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list_item', ['model' => $model]);
                },
            ]) ?>
        </div>
    </div>
</div>
