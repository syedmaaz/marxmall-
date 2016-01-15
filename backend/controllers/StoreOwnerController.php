<?php

namespace backend\controllers;

use Yii;
use common\models\Store;
use common\models\StoreSearch;
use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\SqlDataProvider;

/**
 * StoreController implements the CRUD actions for Store model.
 */
class StoreOwnerController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [],
            ],
        ];
    }

    /**
     * Lists all Store models.
     * @return mixed
     */
    public function actionIndex()
    {
       
        $sql = "SELECT u.id, u.username, u.email, u.status, u.full_name, u.business_name, u.phone_number, u.business_address, u.status, s.store_name as store_name FROM `user` u join user_store us on us.user_id = u.id join store s on s.store_id = us.store_id";

        $count = Yii::$app->db->createCommand($sql)->queryScalar();

        $dataProvider = new SqlDataProvider([
            'sql' => $sql,
            'params' => [':status' => 1],
            'totalCount' => $count,
            'sort' => [
                'attributes' => [
                    'store_name',
                    'username' => [
                        'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                        'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                        'default' => SORT_DESC,
                        'label' => 'Name',
                    ],
                ],
            ],
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        // $model = User::findBySql($sql);  

        return $this->render('index', [
            'model' => $dataProvider,
           
        ]);
    }

    public function actionActivate($id) {

        $user = User::findOne($id);
        $user->status = 10;

        $user->save();

        return $this->redirect(['view', 'id' => $id]);
    }

    public function actionView($id) {

        $sql = "SELECT u.id, u.username, u.email, u.status, u.full_name, u.business_name, u.phone_number, u.business_address, u.status, s.store_name as store_name FROM `user` u join user_store us on us.user_id = u.id join store s on s.store_id = us.store_id";

        return $this->render('view', [
            'model' => User::findBySql($sql)->one(),
        ]);
    }

}
