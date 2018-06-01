<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $category
 * @property string $price
 * @property string $image
 * @property string $description
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category', 'price', 'image', 'description'], 'required'],
            [['id'], 'integer'],
            [['description'], 'string'],
            [['category', 'image'], 'string', 'max' => 80],
            [['price'], 'string', 'max' => 40],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Категория',
            'price' => 'Цена',
            'image' => 'Картинка',
            'description' => 'Описание',
        ];
    }

    public function getImageurl()
    {
        return \Yii::$app->request->BaseUrl.'/images/'.$this->image;
    }
}
