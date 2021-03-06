<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Order1 */

$this->title = 'Update Order1: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
