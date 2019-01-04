<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Masalah2;

/**
 * Masalah2Search represents the model behind the search form about `app\models\Masalah2`.
 */
class Masalah2Search extends Masalah2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_masalah', 'id_jenis_masalah'], 'integer'],
            [['nama_pelapor', 'waktu_pelaporan', 'detail_masalah', 'status'], 'safe'],
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
        $query = Masalah2::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

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
