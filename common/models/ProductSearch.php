<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\UserStore;
use common\models\User;

/**
 * ProductSearch represents the model behind the search form about `common\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prod_id', 'prod_price', 'currency', 'store_id', 'in_stock', 'num_product'], 'integer'],
            [['prod_name', 'prod_desc'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        $stores = [];
        if(\Yii::$app->user->identity->id != 1) {
            $stores = UserStore::find()->select('store_id')->where(['user_id' =>  Yii::$app->user->identity->id])->all();
            $stores = ArrayHelper::getColumn($stores, 'store_id'); 
        }
        // print_r(yii\helpers\ArrayHelper::getColumn($store, 'store_id')); exit;

        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'prod_id' => $this->prod_id,
            'prod_price' => $this->prod_price,
            'currency' => $this->currency,
            'store_id' => $this->store_id,
            'in_stock' => $this->in_stock,
            'num_product' => $this->num_product,
        ]);

        $query->andFilterWhere(['like', 'prod_name', $this->prod_name])
            ->andFilterWhere(['like', 'prod_desc', $this->prod_desc])
            ->andFilterWhere(['in', 'store_id', $stores]);

        return $dataProvider;
    }
}
