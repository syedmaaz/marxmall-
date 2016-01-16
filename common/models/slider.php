<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cms".
 *
 * @property integer $cms_id
 * @property string $cms_name
 * @property string $cms_content
 */
class slider extends \yii\db\ActiveRecord
{

    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'image'], 'required'],
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
            'image' => 'Image Path',
        ];
    }
}
