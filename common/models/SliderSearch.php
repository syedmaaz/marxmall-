<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Slider;

/**
 * SliderSearch represents the model behind the search form about `common\models\Slider`.
 */
class SliderSearch extends Slider
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['image'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Slider::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
