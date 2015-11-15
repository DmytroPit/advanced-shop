<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\PhotoUploadForm;
use yii\web\UploadedFile;


class PhotoController extends Controller
{
//    public function actionIndex()
//    {
//        $model = new UploadImageForm();
//
//        if (Yii::$app->request->isPost) {
//            $model->imageFile = UploadedFile::getInstances($model, 'imageFile');
//
//            if ($model->photo && $model->validate()) {
//                foreach ($model->photo as $photo) {
//                $photo->saveAs('uploads/' . $photo->baseName . '.' . $photo->extension);
//                }
//            }
//        }
//
//        return $this->render('image', ['model' => $model]);
//    }

//Primer Vadika
    public function actionUpload()
    {
        $model = new PhotoUploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
                $model = new PhotoUploadForm();
                return $this->render('upload_photo', ['model' => $model]);
            }
        }

        return $this->render('upload_photo', ['model' => $model]);
    }

    public function rules()
    {
        return [
            [['image'], 'image', 'extensions' => 'jpg, png'],
        ];
    }
}

/**
 * Created by PhpStorm.
 * User: dydluk
 * Date: 14.11.15
 * Time: 15:00
 */