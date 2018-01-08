<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblFunder]].
 *
 * @see TblFunder
 */
class TblFunder extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TblFunder[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblFunder|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
