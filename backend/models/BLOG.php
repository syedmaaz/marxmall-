<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogs".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $image_url
 * @property integer $created_at
 * @property integer $updated_at
 */
class BLOG extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogs';
    }


    public $file;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'image_url', 'created_at', 'updated_at'], 'required'],
            [['content'], 'string'],
            [[ 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['image_url'], 'string', 'max' => 255],
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Blog Title',
            'content' => 'Blog Content',
            'image_url' => 'Blog Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
