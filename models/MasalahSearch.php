<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Masalah;

/**
 * MasalahSearch represents the model behind the search form of `app\models\Masalah`.
 */
class MasalahSearch extends Masalah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_masalah', 'id_jenis_masalah'], 'integer'],
            [['nama_pelapor', 'waktu_pelaporan', 'detail_masalah', 'status'], 'safe'],
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
        $query = Masalah::find();

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
            'id_masalah' => $this->id_masalah,
            'id_jenis_masalah' => $this->id_jenis_masalah,
            'waktu_pelaporan' => $this->waktu_pelaporan,
        ]);

        $query->andFilterWhere(['like', 'nama_pelapor', $this->nama_pelapor])
            ->andFilterWhere(['like', 'detail_masalah', $this->detail_masalah])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
