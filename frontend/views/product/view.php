<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\web\UrlManager;
use yii\helpers\Url;
//use frontend\models\Characteristics;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <ul>
        <?php foreach($model->characteristics as $characteristic) : ?>
            <li>
                <?= Html::encode("{$characteristic->characteristicTitle->title} : {$characteristic->value}")?>
            </li>
        <?php endforeach; ?>
    </ul>




    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description',
            'price',
        ],
    ]) ?>


    <?= Html::button('Заказать', ['value'=>Url::toRoute(['order1/create', 'id_product' => $model->id]),
        'class' => 'btn btn-primary',
        'id' => 'orderButton',
    ]) ?>

    <?php
        Modal::begin([
            'header' => '<h4>Заказ<h4>',
            'id' => 'modal',
            'size' => 'modal-lg',

        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();

    ?>
</div>

