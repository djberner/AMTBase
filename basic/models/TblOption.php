<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblOption]].
 *
 * @see TblOption
 */
class TblOption extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TblOption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblOption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
