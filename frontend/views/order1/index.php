<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Order1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_product',
            'number',
            'customer_name',
            'customer_phone',
            // 'order_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
