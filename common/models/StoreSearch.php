<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use common\models\Store;
use common\models\UserStore;


/**
 * StoreSearch represents the model behind the search form about `common\models\Store`.
 */
class StoreSearch extends Store
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id'], 'integer'],
            [['store_name', 'store_desc', 'store_picture'], 'safe'],
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

        $query = Store::find();

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
            'store_id' => $this->store_id,
        ]);

        $query->andFilterWhere(['like', 'store_name', $this->store_name])
            ->andFilterWhere(['like', 'store_desc', $this->store_desc])
            ->andFilterWhere(['like', 'store_picture', $this->store_picture])
            ->andFilterWhere(['in', 'store_id', $stores]);

        return $dataProvider;
    }
}
