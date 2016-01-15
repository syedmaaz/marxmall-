<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property integer $store_id
 * @property string $store_name
 * @property string $store_desc
 * @property string $store_picture
 *
 * @property Product[] $products
 * @property UserStore[] $userStores
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    public static function tableName()
    {
        return 'store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_name', 'store_desc'], 'required'],
            [['store_desc', 'store_picture'], 'string'],
            [['store_name'], 'string', 'max' => 100],
            [['file'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'store_id' => 'Store ID',
            'store_name' => 'Store Name',
            'store_desc' => 'Store Description',
            'store_picture' => 'Store Picture',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['store_id' => 'store_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserStores()
    {
        return $this->hasMany(UserStore::className(), ['store_id' => 'store_id']);
    }
}
