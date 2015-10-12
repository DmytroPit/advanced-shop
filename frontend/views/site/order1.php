<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order1 */
/* @var $form ActiveForm */
?>
<div class="site-order1">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_product') ?>
        <?= $form->field($model, 'number') ?>
        <?= $form->field($model, 'customer_name') ?>
        <?= $form->field($model, 'customer_phone') ?>
        <?= $form->field($model, 'order_time') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-order1 -->
