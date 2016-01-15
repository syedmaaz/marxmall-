<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Store */

// $this->title = $model->store_id;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stores'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
      
    </p>

    <section class="content">
        <div class="product-view">

            <h1><?= '#' . $model->id . ' ' . $model->full_name ?></h1>

            <p>
                <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['store-owner/activate', 'id' =>$model->id ]) ?>">Activate this Store</a>        
            </p>

            <table class="table table-striped table-bordered detail-view">
                <tbody>
                    <tr><th>User ID</th><td><?= $model->id ?></td></tr>
                    <tr><th>Username</th><td><?= $model->username ?></td></tr>
                    <tr><th>Full Name</th><td><?= $model->full_name ?></td></tr>
                    <tr><th>Business Name</th><td><?= $model->business_name ?></td></tr>
                    <tr><th>Phone Number</th><td><?= $model->phone_number ?></td></tr>
                    <tr><th>Email</th><td><?= $model->email ?></td></tr>
                    <tr><th>Status</th><td><?= ($model->status == 10)? 'Active' : 'Inactive' ?></td></tr>
                    
                </tbody>
            </table>
        </div>
    </section>

</div>
