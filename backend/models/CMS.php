<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms".
 *
 * @property integer $cms_id
 * @property string $cms_name
 * @property string $cms_content
 */
class CMS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cms_name', 'cms_content'], 'required'],
            [['cms_content'], 'string'],
            [['cms_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cms_id' => 'Cms ID',
            'cms_name' => 'Cms Name',
            'cms_content' => 'Cms Content',
        ];
    }
}
