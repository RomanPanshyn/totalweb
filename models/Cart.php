<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $orderid
 * @property string $productids
 * @property string $details
 * @property string $name
 * @property string $phone
 * @property string $email
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderid', 'productids', 'name', 'phone'], 'required'],
            [['orderid'], 'integer'],
            [['details'], 'string'],
            [['categoryids', 'name', 'phone', 'email'], 'string', 'max' => 100],
            [['orderid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderid' => 'Номер заказа',
            'productids' => 'Услуги',
            'details' => 'Детали',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
        ];
    }
}
