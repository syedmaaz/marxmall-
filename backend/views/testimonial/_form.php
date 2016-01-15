<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\web\View;


/**
 * @var yii\web\View $this
 * @var app\models\TESTIMONIALS $model
 * @var yii\widgets\ActiveForm $form
 */
?>
<?php  $this->registerJsFile("//cdn.tinymce.com/4/tinymce.min.js"); ?>

<div class="testimonials-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ; ?>
    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

<?= FileInput::widget([
            //'name' => 'images[]',
            'model' => $model,
            'attribute' => 'image',         
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
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
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