<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order1".
 *
 * @property integer $id
 * @property integer $id_product
 * @property integer $number
 * @property string $customer_name
 * @property string $customer_phone
 * @property string $order_time
 *
 * @property Product $idProduct
 */
class Order1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product', 'number', 'customer_name', 'customer_phone'], 'required'],
            [['id_product', 'number'], 'integer'],
            [['order_time'], 'safe'],
            [['customer_name', 'customer_phone'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_product' => 'Id Product',
            'number' => 'Number',
            'customer_name' => 'Customer Name',
            'customer_phone' => 'Customer Phone',
            'order_time' => 'Order Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }
}
