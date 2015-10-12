<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "characteristics".
 *
 * @property integer $id
 * @property integer $id_title
 * @property integer $id_product
 * @property string $value
 *
 * @property Product $idProduct
 * @property CharacteristicsTitle $idTitle
 */
class Characteristics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'characteristics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_title', 'id_product', 'value'], 'required'],
            [['id_title', 'id_product'], 'integer'],
            [['value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_title' => 'Id Title',
            'id_product' => 'Id Product',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTitle()
    {
        return $this->hasOne(CharacteristicsTitle::className(), ['id' => 'id_title']);
    }
}
