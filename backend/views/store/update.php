<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Store */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Store',
]) . ' ' . $model->store_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->store_id, 'url' => ['view', 'id' => $model->store_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="store-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
