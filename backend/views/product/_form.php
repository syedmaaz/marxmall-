<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
//use kartik\widgets\FileInput;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ; ?>

    <?= $form->field($model, 'prod_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'prod_desc')->textarea(['maxlength' => 255]) ?>

    <?= $form->field($model, 'prod_price')->textInput() ?>

    <?= $form->field($model, 'store_id')->dropDownList(ArrayHelper::map($storeList, 'store_id', 'store_name'), ['prompt' => '-Choose a Store-']) ?>

    <?= $form->field($model, 'cat_id')->dropDownList(ArrayHelper::map(\common\models\Category::find()->all(), 'cat_id', 'cat_name'), ['multiple' => true]) ?>

    <?= $form->field($model, 'in_stock')->dropDownList(['0' => 'Out Of Stock', '1' => 'In Stock'], ['prompt' => '- In Stock ? -']) ?>

    <?= $form->field($model, 'num_product')->textInput() ?>

    <div class="form-group  required ">

        <label class="contro-llabel" for="">Available Colors</label>
        <input type="text" id="" class="form-control" name="PMeta[color]" required>

        <div class="help-block">For more than one color, use comma separator i.e blue, green, red</div>
    </div>

    <div class="form-group required ">

        <label class="control-label" for="">Material</label>
        <input type="text" id="" class="form-control" name="PMeta[material]" required>

        <div class="help-block">for example: cotton</div>
    </div>

    <div class="form-group  required ">

        <label class="control-label" for="">Seasons</label>
        <select id="p" class="form-control" name="PMeta[season]" required> 
            <option value="all seasons">All Seasons</option>
            <option value="spring">Spring</option>
            <option value="summer">Summer</option>
            <option value="autumn">Autumn</option>
            <option value="winter">Winter</option>
        </select>
    </div>

    
    <?= 
        FileInput::widget([
            //'name' => 'images[]',
            'model' => $model,
            'attribute' => 'images',
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
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
