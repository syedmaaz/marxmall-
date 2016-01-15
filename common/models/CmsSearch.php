<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CMS;

/**
 * CmsSearch represents the model behind the search form about `app\models\CMS`.
 */
class CmsSearch extends CMS
{
    public function rules()
    {
        return [
            [['cms_id'], 'integer'],
            [['cms_name', 'cms_content'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = CMS::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'cms_id' => $this->cms_id,
        ]);

        $query->andFilterWhere(['like', 'cms_name', $this->cms_name])
            ->andFilterWhere(['like', 'cms_content', $this->cms_content]);

        return $dataProvider;
    }
}
