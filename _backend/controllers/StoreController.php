<?php

namespace backend\controllers;

use Yii;
use common\models\Store;
use common\models\StoreSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * StoreController implements the CRUD actions for Store model.
 */
class StoreController extends Controller
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
     * Lists all Store models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StoreSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Store model.
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
     * Creates a new Store model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Store();

        if ($model->load(Yii::$app->request->post())) {

            $store_img = UploadedFile::getInstances($model, 'file');
            $model->file = $store_img[0];

            if($model->validate()) {
                if(!empty($store_img)){
                    $image_name = '/store/' . $model->file->baseName . '_' . time() . '.' . $model->file->extension;
                    $image_path = Yii::getAlias('@frontend'). '/web/uploads' . $image_name;
                    $model->file->saveAs( $image_path);

                    $model->store_picture = $image_name;
                    $model->save();
                }
                return $this->redirect(['view', 'id' => $model->store_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Store model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $store_img = UploadedFile::getInstances($model, 'file');
            $model->file = $store_img[0];

            if($model->validate()) {
                if(!empty($store_img)){
                    $image_name = '/store/' . $model->file->baseName . '_' . time() . '.' . $model->file->extension;
                    $image_path = Yii::getAlias('@frontend'). '/web/uploads' . $image_name;
                    $model->file->saveAs( $image_path);

                    $model->store_picture = $image_name;
                    $model->save();
                }
                return $this->redirect(['view', 'id' => $model->store_id]);
            }  else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Store model.
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
     * Finds the Store model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Store the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Store::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
