<?php

namespace backend\controllers;

use Yii;
use app\models\BLOG;
use app\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BlogController implements the CRUD actions for BLOG model.
 */
class BlogController extends Controller
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
     * Lists all BLOG models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single BLOG model.
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
     * Creates a new BLOG model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BLOG;

/*        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } */
		
		  if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
				    $file = UploadedFile::getInstances($model, 'image_url');				
					if(sizeof($file) > 0){
						$model->image_url = $file[0];		
						$image_path = Yii::getAlias('@frontend').'/web/uploads/blog/'.$model->image_url->baseName . '_' .$model->id . '.' .$model->image_url->extension;
						$model->image_url->saveAs($image_path);						
						$model->image_url = "test";//$model->image_url->baseName . '_' .$model->id . '.' .$model->image_url->extension;		
					}
					$model->save();
				
					return $this->redirect(['view', 'id' => $model->id]);
			}  
			
			 // if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
    //     $file = UploadedFile::getInstances($model, 'image_url');    
  
    //  if(sizeof($file) > 0){
    //   $model->file = $file[0];  
    //   $image_path = Yii::getAlias('@frontend').'/web/uploads/blog/'.$model->file->baseName . '_' .$model->id . '.' .$model->file->extension;
    //   $model->file->saveAs($image_path);      
    //   $model->image_url = $model->file->baseName . '_' .$model->id . '.' .$model->file->extension;  
    //  }
     
    //  $model->save();
    
    //  return $this->redirect(['view', 'id' => $model->id]);
   // }

		else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BLOG model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$IMAGE = $model->image_url;
		$model->updated_at = date("Y-m-d H:i:s");	
        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {				
			 $file = UploadedFile::getInstances($model, 'image_url');
					if(sizeof($file) > 0){
						$model->image_url = $file[0];		
						$image_path = Yii::getAlias('@frontend').'/web/uploads/blog/'.$model->image_url->baseName . '_' .$model->id . '.' .$model->image_url->extension;
						$model->image_url->saveAs($image_path);
						$model->image_url = $model->image_url->baseName . '_' .$model->id . '.' .$model->image_url->extension;		
					}
					else{
							$model->image_url = $IMAGE;
					}
			
			$model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }
		else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing BLOG model.
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
     * Finds the BLOG model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BLOG the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BLOG::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
