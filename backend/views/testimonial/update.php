<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\TESTIMONIALS $model
 */

$this->title = 'Update Testimonials: ' . $model->testimonial_id;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->testimonial_id, 'url' => ['view', 'id' => $model->testimonial_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testimonials-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
