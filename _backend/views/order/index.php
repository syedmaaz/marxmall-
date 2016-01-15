<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $orderModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'order_by',
            'shipping_address',
            'city',
            'country',
            'postal_code',
            [
                'attribute' => 'status',
                'value' => function ($data) {

                    if($data->status == 0){
                        return 'Pending';
                    }
                    else if($data->status == 1){
                        return 'Delivered';
                    }
                   // return $data->role; //$data['name'] for array data, e.g. using SqlDataProvider.
                },
            ],

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
