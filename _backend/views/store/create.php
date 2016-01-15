<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Store */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Store',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
