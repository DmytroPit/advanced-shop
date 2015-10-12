<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CharacteristicsTitle */
/* @var $form ActiveForm */
?>
<div class="site-characteristics_title">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-characteristics_title -->
