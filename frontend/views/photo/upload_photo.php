<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 18.10.15
 * Time: 12:48
 */
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

<button>Submit</button>

<?php ActiveForm::end() ?>
