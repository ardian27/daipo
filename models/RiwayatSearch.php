<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Riwayat;

/**
 * RiwayatSearch represents the model behind the search form of `app\models\Riwayat`.
 */
class RiwayatSearch extends Riwayat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_riwayat', 'id_tiket', 'riwayat'], 'integer'],
            [['user'], 'safe'],
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
        $query = Riwayat::find();

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
            'id_riwayat' => $this->id_riwayat,
            'id_tiket' => $this->id_tiket,
            'riwayat' => $this->riwayat,
        ]);

        $query->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
