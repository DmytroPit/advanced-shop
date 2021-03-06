<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "characteristics_title".
 *
 * @property integer $id
 * @property string $title
 *
 * @property Characteristics[] $characteristics
 */
class CharacteristicsTitle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'characteristics_title';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCharacteristics()
    {
        return $this->hasMany(Characteristics::className(), ['id_title' => 'id']);
    }
}
