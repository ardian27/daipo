<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Riwayat]].
 *
 * @see Riwayat
 */
class RiwayatQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Riwayat[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Riwayat|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
