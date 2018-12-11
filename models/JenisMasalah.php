<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_masalah".
 *
 * @property int $id_jenis_masalah
 * @property string $masalah
 */
class JenisMasalah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_masalah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['masalah'], 'required'],
            [['masalah'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis_masalah' => 'Id Jenis Masalah',
            'masalah' => 'Masalah',
        ];
    }

    /**
     * {@inheritdoc}
     * @return JenisMasalahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JenisMasalahQuery(get_called_class());
    }
}
