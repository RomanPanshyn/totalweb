<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $name
 * @property string $category
 * @property string $selectedcategories
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
            [['id', 'name', 'category', 'price', 'image', 'description'], 'required'],
            [['id'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 150],
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
            'name' => 'Название',
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
