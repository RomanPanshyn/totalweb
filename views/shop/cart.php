<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
/**
 * This is the model class for table "cart".
 *
 * @property int $orderid
 * @property string $categoryids
 * @property string $details
 * @property string $name
 * @property string $phone
 * @property string $email
 */
$this->title = 'Total Web Корзина';
?>
<div class="shop-cart">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    <div>
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'orderid')->textInput(['readonly' => 'true']) ?>

        <?= $form->field($model, 'productids')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'details')->textarea(['rows' => 2]) ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Подтвердить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
