<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblBase]].
 *
 * @see TblBase
 */
class TblBaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TblBase[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblBase|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
