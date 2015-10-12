<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Characteristics */
/* @var $form ActiveForm */
?>
<div class="site-characteristics">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_title') ?>
        <?= $form->field($model, 'id_product') ?>
        <?= $form->field($model, 'value') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-characteristics -->
