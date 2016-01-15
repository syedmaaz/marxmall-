<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $order_id
 * @property integer $order_by
 * @property string $shipping_address
 * @property string $city
 * @property string $country
 * @property integer $postal_code
 * @property integer $status
 * @property integer $total
 *
 * @property OrderDetail[] $orderDetails
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shipping_address', 'city', 'country', 'postal_code'], 'required'],
            [['order_by', 'postal_code', 'status', 'total'], 'integer'],
            [['shipping_address'], 'string'],
            [['city', 'country'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_by' => 'Order By',
            'shipping_address' => 'Shipping Address',
            'city' => 'City',
            'country' => 'Country',
            'postal_code' => 'Postal Code',
            'status' => 'Status',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['order_id' => 'order_id']);
    }
}
