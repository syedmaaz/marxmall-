<?php

namespace backend\controllers;

use Yii;
use common\models\Store;
use common\models\StoreSearch;
use common\models\Order;
use common\models\OrderSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * StoreController implements the CRUD actions for Store model.
 */
class OrderController extends Controller
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
        $orderModel = new OrderSearch();
        $dataProvider = $orderModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'orderModel' => $orderModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    // public function actionIndex($id)
    // {
    //    echo $id;
    // }

    /**
     * Finds the Store model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Store the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
