<?php

namespace backend\controllers;

use Yii;
use app\models\TESTIMONIALS;
use app\models\TestimonialSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TestimonialController implements the CRUD actions for TESTIMONIALS model.
 */
class TestimonialController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TESTIMONIALS models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TestimonialSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single TESTIMONIALS model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TESTIMONIALS model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TESTIMONIALS;

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
				    $file = UploadedFile::getInstances($model, 'image');

					if(sizeof($file) > 0){
						$model->image = $file[0];		
						$image_path = Yii::getAlias('@frontend').'/web/uploads/testimonial/'.$model->image->baseName . '_' .$model->testimonial_id . '.' .$model->image->extension;
						$model->image->saveAs($image_path);				
						$model->image = $model->image->baseName . '_' .$model->testimonial_id . '.' .$model->image->extension;								
					}
					$model->save();
				
					return $this->redirect(['view', 'id' => $model->testimonial_id]);
			} else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TESTIMONIALS model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$IMAGE = $model->image;

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
			 $file = UploadedFile::getInstances($model, 'image');
					if(sizeof($file) > 0){
						$model->image = $file[0];		
						$image_path = Yii::getAlias('@frontend').'/web/uploads/testimonial/'.$model->image->baseName . '_' .$model->testimonial_id . '.' .$model->image->extension;
						$model->image->saveAs($image_path);
						$model->image = $model->image->baseName . '_' .$model->testimonial_id . '.' .$model->image->extension;		
					}
					else{
							$model->image =  $IMAGE ;
					}
			$model->save();
            return $this->redirect(['view', 'id' => $model->testimonial_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TESTIMONIALS model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TESTIMONIALS model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TESTIMONIALS the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TESTIMONIALS::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
