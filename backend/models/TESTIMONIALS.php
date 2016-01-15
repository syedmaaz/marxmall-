<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property integer $testimonial_id
 * @property string $comment
 * @property string $image
 */
class TESTIMONIALS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment', 'image'], 'required'],
            [['comment'], 'string'],
            [['image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'testimonial_id' => 'Testimonial ID',
            'comment' => 'Comment',
            'image' => 'Image',
        ];
    }
}
