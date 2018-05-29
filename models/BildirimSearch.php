<?php

namespace kouosl\notification\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\notification\models\Bildirim;

/**
 * BildirimSearch represents the model behind the search form of `kouosl\notification\models\Bildirim`.
 */
class BildirimSearch extends Bildirim
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['bildirim_tip', 'bildirim_icerik', 'bildirim_tarih'], 'safe'],
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
    public function search($params)
    {
        $query = Bildirim::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'bildirim_tip', $this->bildirim_tip])
            ->andFilterWhere(['like', 'bildirim_icerik', $this->bildirim_icerik])
            ->andFilterWhere(['like', 'bildirim_tarih', $this->bildirim_tarih]);

        return $dataProvider;
    }
}
