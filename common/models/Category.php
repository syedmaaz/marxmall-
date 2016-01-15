<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property string $cat_desc
 *
 * @property ProdCat[] $prodCats
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    public $file;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'cat_desc', 'file'], 'required'],
            [['cat_name'], 'string', 'max' => 100],
            [['cat_desc'], 'string', 'max' => 255],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Category  ID',
            'cat_name' => 'Category Name',
            'cat_desc' => 'Category Description',
            'cat_pic' => 'Category Picture',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdCats()
    {
        return $this->hasMany(ProdCat::className(), ['cat_id' => 'cat_id']);
    }
}
