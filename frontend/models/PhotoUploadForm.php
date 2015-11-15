<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 18.10.15
 * Time: 12:46
 */

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class PhotoUploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $photo = new Photo();
            $photo->product_id = \Yii::$app->product->id;
            $photoSrc = 'uploads/' . $photo->created_at . '.' . $this->imageFile->extension;
            $photo->photo_src = $photoSrc;

            $this->imageFile->saveAs($photoSrc);

            $photo->save();
            return true;
        } else {
            return false;
        }
    }
}

/**
 * Created by PhpStorm.
 * User: dydluk
 * Date: 14.11.15
 * Time: 17:14
 */