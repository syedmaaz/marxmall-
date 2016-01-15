<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use kartik\file\FileInput;


/**
 * @var yii\web\View $this
 * @var app\models\BLOG $model
 * @var yii\widgets\ActiveForm $form
 */
?>
<?php  $this->registerJsFile("//cdn.tinymce.com/4/tinymce.min.js"); ?>
<div class="blog-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ; ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

<?= FileInput::widget([
            //'name' => 'images[]',
            'model' => $model,
            'attribute' => 'image_url',         
            'pluginOptions' => [
                'initialPreview'=>[],
                'initialCaption'=>"User Image",
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
<?php $this->registerJs("tinymce.init({
  selector: 'textarea',
  height: 500,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});", View::POS_END, 'text-editor');?>