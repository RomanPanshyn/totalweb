<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Content;
use yii\data\Pagination;

/**
 * ShopSearch represents the model behind the search form of `app\models\Content`.
 */
class ShopSearch extends Content
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['category', 'price', 'image', 'description'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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

     public function searchcategory()
     {
          $categories = Content::find()->select('category')->distinct()->all();

          $categ = [];
          $i = 0;
          if ($categories)
          {
              foreach ($categories as $row)
              {
                  $categ[] = ['id' => $i, 'name' => $row['category']];
                  $i++;
              }
          }

          return $categ;
     }

    public function search($params, $categories)
    {
        $query = Content::find()
        ->where(['category' => $categories
                ]);

        // add conditions that should always apply here

        $pagination = new Pagination(['pageSize' => 10]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => $pagination,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
