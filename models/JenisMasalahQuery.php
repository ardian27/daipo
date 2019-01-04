<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[JenisMasalah]].
 *
 * @see JenisMasalah
 */
class JenisMasalahQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return JenisMasalah[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return JenisMasalah|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
