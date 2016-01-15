<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property integer $order_id
 * @property integer $prod_id
 * @property string $size
 * @property integer $quantity
 * @property integer $unit_price
 * @property integer $unit_sum
 *
 * @property Order $order
 * @property Product $prod
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'prod_id', 'quantity', 'unit_price', 'unit_sum'], 'required'],
            [['order_id', 'prod_id', 'quantity', 'unit_price', 'unit_sum'], 'integer'],
            [['size'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'prod_id' => 'Prod ID',
            'size' => 'Size',
            'quantity' => 'Quantity',
            'unit_price' => 'Unit Price',
            'unit_sum' => 'Unit Sum',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProd()
    {
        return $this->hasOne(Product::className(), ['prod_id' => 'prod_id']);
    }
}
