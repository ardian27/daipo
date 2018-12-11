<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Masalah]].
 *
 * @see Masalah
 */
class MasalahQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Masalah[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Masalah|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
