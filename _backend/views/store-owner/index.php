<?php


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Stores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Store',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $model,
        'filterModel' => $model,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'full_name',
            'email',
            'store_name',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                	
                    if($data['status'] != 10){
                        return 'Pending';
                    }
                    else if($data['status'] == 10){
                        return 'Active User';
                    }
                   // return $data->role; //$data['name'] for array data, e.g. using SqlDataProvider.
                },
            ],
            
            [
			  	'class' => 'yii\grid\ActionColumn',
				'template' => '{new_action1}{new_action2}',
				'buttons' => [
					'new_action1' => function ($url, $model) {
					    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
					                'title' => Yii::t('app', 'New Action1'),
					    ]);
					}
				],
				'urlCreator' => function ($action, $model, $key, $index) {
				if ($action === 'new_action1') {
				    $url = Yii::$app->urlManager->createUrl(['store-owner/view', 'id' => $model['id']]);
				    return $url;
				}
				}
			],
        ],
    ]); ?>

</div>
