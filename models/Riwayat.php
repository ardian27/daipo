<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riwayat".
 *
 * @property int $id_riwayat
 * @property int $id_tiket
 * @property int $riwayat
 * @property string $user
 *
 * @property Masalah $tiket
 */
class Riwayat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tiket', 'riwayat', 'user'], 'required'],
            [['id_tiket', 'riwayat'], 'integer'],
            [['user'], 'string', 'max' => 100],
            [['id_tiket'], 'exist', 'skipOnError' => true, 'targetClass' => Masalah::className(), 'targetAttribute' => ['id_tiket' => 'id_masalah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_riwayat' => 'Id Riwayat',
            'id_tiket' => 'Id Tiket',
            'riwayat' => 'Riwayat',
            'user' => 'User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiket()
    {
        return $this->hasOne(Masalah::className(), ['id_masalah' => 'id_tiket']);
    }

    /**
     * {@inheritdoc}
     * @return RiwayatQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RiwayatQuery(get_called_class());
    }
}
