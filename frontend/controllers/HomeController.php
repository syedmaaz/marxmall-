<?php

namespace frontend\controllers;

use Yii;
use common\models\Product;
use common\models\ProdCat;
use common\models\ProductMeta;
use yii\db\Query;


class HomeController extends \yii\web\Controller
{
    public $layout = 't2/main';

    // public function beforeAction($action) {
    //     $this->enableCsrfValidation = false;
    //     return parent::beforeAction($action);
    // }

    public function actionIndex($id = 0)
    {

        //echo Yii::getAlias('@frontend'); exit;
        $product = Product::find();

        if($id != 0) {
            $product = $product->where('store_id = :store_id', [':store_id' => $id]);    
        }

        return $this->render('index',[
            'product' => $product->all()
        ]);
    }

    public function actionDetail($id)
    {
        $product = Product::findOne([
            'prod_id' => $id
        ]);
   
        return $this->render('detail',[
            'prod' => $product
        ]);
    }

    public function actionStoredetail($id = 0) {

        $product = Product::find();

        if($id != 0) {
            $product = $product->where('store_id = :store_id', [':store_id' => $id]);    
        }

       
        return $this->render('storedetail',[
            'products' => $product->all()
        ]);
    }

    public function actionCheckout() {

        session_start();

        $prod_ids = $_SESSION['cart-item'];

        $products = Product::find()->where(['prod_id' => $prod_ids ])->all();

        return $this->render('checkout',[
            'products' => $products 
        ]);
    }

    public function actionAddToCart() {
        session_start();
        

        if($postData = Yii::$app->request->post()) {
            $item = [];
            
            if(isset($_SESSION['cart-item'])) {
                $item = $_SESSION['cart-item'];
               
                $item[$postData['prod_id']] = $postData['prod_id'];
            } else {
                $item[$postData['prod_id']] = $postData['prod_id'];
                // $_SESSION['cart-item'] = $item;
            }
            $_SESSION['cart-item'] = $item;
            
        }
    }

}
