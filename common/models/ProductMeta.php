<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_meta".
 *
 * @property integer $meta_id
 * @property integer $prod_id
 * @property string $meta_key
 * @property string $meta_value
 *
 * @property Product $prod
 */
class ProductMeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_meta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prod_id'], 'integer'],
            [['meta_key', 'meta_value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'meta_id' => 'Meta ID',
            'prod_id' => 'Prod ID',
            'meta_key' => 'Meta Key',
            'meta_value' => 'Meta Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProd()
    {
        return $this->hasOne(Product::className(), ['prod_id' => 'prod_id']);
    }

    public function getMetaByName($id, $key)
    {
        return ProductMeta::find()->select('meta_key','meta_value')->andWhere(['prod_id' => $id, 'meta_key' => $key])->all();
//        return $this->hasMany(ProductMeta::className(), ['prod_id' => 'prod_id'])->where(['id'=> $id, 'meta_key' => $key]);
    }
}
