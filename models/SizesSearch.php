<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sizes;

/**
 * SizesSearch represents the model behind the search form about `app\models\Sizes`.
 */
class SizesSearch extends Sizes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSize', 'idProduct', 'Availability'], 'integer'],
            [['Size'], 'safe'],
            [['PriceCorrection'], 'number'],
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
        $query = Sizes::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idSize' => $this->idSize,
            'idProduct' => $this->idProduct,
            'Availability' => $this->Availability,
            'PriceCorrection' => $this->PriceCorrection,
        ]);

        $query->andFilterWhere(['like', 'Size', $this->Size]);

        return $dataProvider;
    }
}
