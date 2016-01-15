<?php

namespace frontend\controllers;

use Yii;
use common\models\Product;
use common\models\ProdCat;
use common\models\ProductMeta;
use yii\db\Query;


class SearchController extends \yii\web\Controller
{
    public $layout = 't2/main';


    public function actionIndex()
    {
        $product = Product::find()->all();

//        print_r($product[0]->productImg); exit;

        return $this->render('index',[
            'product' => $product
        ]);
    }

    public function actionDetail($id)
    {
        $product = Product::findOne([
            'prod_id' => $id
        ]);
//        echo '<pre>';
//        print_r(Product::getMetaByName('color'));exit;
//echo '<pre>';
//        print_r($product->getProductImg('color')); exit;

        return $this->render('detail',[
            'prod' => $product
        ]);
    }

}
