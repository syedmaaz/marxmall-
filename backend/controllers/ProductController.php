<?php

namespace backend\controllers;

use common\models\ProdCat;
use common\models\ProductMeta;
use Yii;
use common\models\Product;
use common\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\db\Query;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // echo Yii::getAlias('@common'); exit;
        $model = new Product();
        $modelProdMeta = new ProductMeta();

        $stores = [];
        if(\Yii::$app->user->identity->id == 1) {
            $stores = \common\models\UserStore::find()->select('store_id')->where(['user_id' =>  Yii::$app->user->identity->id])->all();
            $stores  = \yii\helpers\ArrayHelper::getColumn($stores, 'store_id');
            $storeList = \common\models\Store::find()->where(['IN', 'store_id', $stores])->all();
        } else {
            $storeList = \common\models\Store::find()->all();
        }
       
        
        if ($postData = Yii::$app->request->post()) {

            if ($model->load($postData) && $model->save()) {
                
                $prod_id = $model->prod_id;

                foreach ($model->cat_id as $cat) {
                    $catModel = new ProdCat();

                    $catModel->cat_id = $cat;
                    $catModel->prod_id = $prod_id;

                    $catModel->save();
                }

                $file = UploadedFile::getInstances($model, 'images');
                
                $model->file = $file[0];
                $image_path = Yii::getAlias('@frontend') . '/web/uploads/product/' . $model->file->baseName . '_' . $prod_id . '.' . $model->file->extension;
                $model->file->saveAs($image_path);

                $this->updateProductMeta($id, 'prod_img', $model->file->baseName . '_' . $prod_id . '.' . $model->file->extension);

                foreach ($postData['PMeta'] as $key => $meta_value) {
                    $this->updateProductMeta($id, $key, $meta_value);
                }

                return $this->redirect(['view', 'id' => $model->prod_id]);
            }
           
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelProdMeta' => $modelProdMeta,
                'storeList' => $storeList
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelProdMeta = ProductMeta::find()->where(['prod_id' => $id]);

        $stores = [];
        if(\Yii::$app->user->identity->id == 1) {
            $stores = \common\models\UserStore::find()->select('store_id')->where(['user_id' =>  Yii::$app->user->identity->id])->all();
            $stores  = \yii\helpers\ArrayHelper::getColumn($stores, 'store_id');
            $storeList = \common\models\Store::find()->where(['IN', 'store_id', $stores])->all();
        } else {
            $storeList = \common\models\Store::find()->all();
        }
       
        
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           
            $prod_id = $model->prod_id;
            $postData = Yii::$app->request->post();
            foreach ($model->cat_id as $cat) {
                $catModel = new ProdCat();

                $catModel->cat_id = $cat;
                $catModel->prod_id = $prod_id;

                $catModel->save();
            }
 
            $file = UploadedFile::getInstances($model, 'images');
            
            $model->file = $file[0];
            $image_path = Yii::getAlias('@frontend') . '/web/uploads/product/' . $model->file->baseName . '_' . $prod_id . '.' . $model->file->extension;
            $model->file->saveAs($image_path);

            $this->updateProductMeta($id, 'prod_img', $model->file->baseName . '_' . $prod_id . '.' . $model->file->extension);
            
            foreach ($postData['PMeta'] as $key => $meta_value) {
                $this->updateProductMeta($id, $key, $meta_value);
            }

            return $this->redirect(['view', 'id' => $model->prod_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'modelProdMeta' => $modelProdMeta,
                'storeList' => $storeList
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        // $connection = new Query();
       Yii::$app->db->createCommand('DELETE FROM prod_cat WHERE prod_id='.$id)
            ->execute();

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function updateProductMeta($prod_id, $meta_key, $meta_value) {
        if(($model = ProductMeta::findOne(['prod_id' => $prod_id, 'meta_key' => $meta_key])) !== null) {
            $model->meta_value = $meta_value;
            // echo 'updated';
        } else {
            $model  = new ProductMeta();
            $model->prod_id = $prod_id;
            $model->meta_key = $meta_key;
            $model->meta_value = $meta_value;
            // echo "inserted";
        }
        $model->save();
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
