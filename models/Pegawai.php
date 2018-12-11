<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $id_pegawai
 * @property string $nama
 * @property string $divisi
 * @property int $telepon
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'nama', 'divisi', 'telepon'], 'required'],
            [['telepon'], 'integer'],
            [['id_pegawai', 'divisi'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 50],
            [['id_pegawai'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama' => 'Nama',
            'divisi' => 'Divisi',
            'telepon' => 'Telepon',
        ];
    }
}
