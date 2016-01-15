<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TESTIMONIALS;

/**
 * TestimonialSearch represents the model behind the search form about `app\models\TESTIMONIALS`.
 */
class TestimonialSearch extends TESTIMONIALS
{
    public function rules()
    {
        return [
            [['testimonial_id'], 'integer'],
            [['comment', 'image'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = TESTIMONIALS::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'testimonial_id' => $this->testimonial_id,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
