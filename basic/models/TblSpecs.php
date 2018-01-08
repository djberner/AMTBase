<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblSpecs]].
 *
 * @see TblSpecs
 */
class TblSpecs extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TblSpecs[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblSpecs|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
