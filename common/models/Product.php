<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $prod_id
 * @property string $prod_name
 * @property string $prod_desc
 * @property integer $prod_price
 * @property integer $currency
 * @property integer $store_id
 * @property integer $in_stock
 * @property integer $num_product
 *
 * @property OrderDetail[] $orderDetails
 * @property ProdCat[] $prodCats
 * @property Store $store
 * @property ProductMeta[] $productMetas
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /*
     * Custom field
     * */

    public $cat_id;
    public $file;
    public $images;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prod_name', 'prod_desc', 'prod_price', 'store_id', 'num_product', 'cat_id'], 'required'],
            [['prod_price', 'store_id', 'in_stock', 'num_product'], 'integer'],
            [['prod_name'], 'string', 'max' => 50],
            [['prod_desc'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['images'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prod_id' => 'Product ID',
            'prod_name' => 'Product Name',
            'prod_desc' => 'Product Description',
            'prod_price' => 'Product Price',
            'currency' => 'Currency',
            'store_id' => 'Store ID',
            'in_stock' => 'In Stock',
            'cat_id' => 'Category',
            'num_product' => 'Total Unit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['prod_id' => 'prod_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdCats()
    {
        return $this->hasMany(ProdCat::className(), ['prod_id' => 'prod_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Store::className(), ['store_id' => 'store_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductMetas()
    {
        return $this->hasMany(ProductMeta::className(), ['prod_id' => 'prod_id']);
    }

    public function getProductImg()
    {
        $prod = $this->hasMany(ProductMeta::className(), ['prod_id' => 'prod_id'])->where(['meta_key' => 'prod_img']);
        // echo '<pre>';
        // print_r($prod); exit;
        return $prod;
    }


}
