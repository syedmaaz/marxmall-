<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    
    <div class="site-signup col-md-6">
        <h1>Signup as Store Owner</h1>

        <p>Please fill out the following to Register as Store:</p>

        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['enctype' => 'multipart/form-data']]); ?>

                    <?php if(\Yii::$app->user->isGuest): ?>
                        <?= $form->field($userModel, 'username') ?>
                        <?= $form->field($userModel, 'email') ?>
                        <?= $form->field($userModel, 'password')->passwordInput() ?>
                    <?php endif;?>

                    <?= $form->field($storeModel, 'store_name')->textInput(['maxlength' => 100]) ?>

                    <?= $form->field($storeModel, 'store_desc')->textarea(['rows' => 6]) ?>

                    <?= $form->field($storeModel, 'file')->fileInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>