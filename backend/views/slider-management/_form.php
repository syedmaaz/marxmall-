<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/**
 * @var yii\web\View $this
 * @var common\models\Slider $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ; ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= 
        FileInput::widget([
            //'name' => 'images[]',
            'model' => $model,
            'attribute' => 'image',
            'options'=>[
                'multiple'=>true
            ],
            'pluginOptions' => [
                'initialPreview'=>[],
                'initialCaption'=>"Product Images",
                'overwriteInitial'=>false,
                'options'=>['accept'=>'image/*'],
                'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png']]
            ]
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
