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

<?= $form->field($model, 'viewFile')->fileInput() ?>

<button>Submit</button>

<?php ActiveForm::end() ?>
/**
 * Created by PhpStorm.
 * User: dydluk
 * Date: 14.11.15
 * Time: 17:19
 */