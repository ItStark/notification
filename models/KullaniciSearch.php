<?php

namespace kouosl\notification\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\notification\models\Kullanici;

/**
 * KullaniciSearch represents the model behind the search form of `kouosl\notification\models\Kullanici`.
 */
class KullaniciSearch extends Kullanici
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kullanici_id'], 'integer'],
            [['kullanici_adSoyad', 'okundu_tarih'], 'safe'],
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
        $query = Kullanici::find();

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
            'kullanici_id' => $this->kullanici_id,
            'okundu_tarih' => $this->okundu_tarih,
        ]);

        $query->andFilterWhere(['like', 'kullanici_adSoyad', $this->kullanici_adSoyad]);

        return $dataProvider;
    }
}
