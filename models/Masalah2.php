<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "masalah".
 *
 * @property int $id_masalah
 * @property string $nama_pelapor
 * @property int $id_jenis_masalah
 * @property string $waktu_pelaporan
 * @property string $detail_masalah
 * @property string $status
 *
 * @property JenisMasalah $jenisMasalah
 * @property Riwayat[] $riwayats
 */
class Masalah2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'masalah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pelapor', 'id_jenis_masalah', 'waktu_pelaporan', 'detail_masalah', 'status'], 'required'],
            [['id_jenis_masalah'], 'integer'],
            [['waktu_pelaporan'], 'safe'],
            [['detail_masalah'], 'string'],
            [['nama_pelapor', 'status'], 'string', 'max' => 20],
            [['id_jenis_masalah'], 'exist', 'skipOnError' => true, 'targetClass' => JenisMasalah::className(), 'targetAttribute' => ['id_jenis_masalah' => 'id_jenis_masalah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_masalah' => 'Id Masalah',
            'nama_pelapor' => 'Nama Pelapor',
            'id_jenis_masalah' => 'Id Jenis Masalah',
            'waktu_pelaporan' => 'Waktu Pelaporan',
            'detail_masalah' => 'Detail Masalah',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisMasalah()
    {
        return $this->hasOne(JenisMasalah::className(), ['id_jenis_masalah' => 'id_jenis_masalah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayats()
    {
        return $this->hasMany(Riwayat::className(), ['id_tiket' => 'id_masalah']);
    }

    /**
     * {@inheritdoc}
     * @return MasalahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MasalahQuery(get_called_class());
    }
}
