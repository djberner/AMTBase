<?php
namespace frontend\controllers;

use Yii;
use app\models\Tblbase;
use app\models\TblbaseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ProductController extends Controller
{
 public function actionCategory($categories)
    {
        $params = explode('/', $categories);
		
		$product = Yii::$app->db->createCommand('SELECT * FROM tblbase WHERE Friendly_URL_4="'.$categories.'"')->queryOne();
        $specs = Yii::$app->db->createCommand('SELECT Technical_Category_Description,Technical_Long_Description,Technical_Value FROM tblspec WHERE Derivative_CAP_Code="'.$product["Derivative_CAP_Code"].'" ORDER BY Technical_Category_Description ')->queryAll();
        $standard = Yii::$app->db->createCommand('select tblstandard.Derivative_Standard_Equipment_Category_Description, Derivative_Standard_Equipment_Description FROM tblstandard where tblstandard.Derivative_CAP_Code = "'.$product["Derivative_CAP_Code"].'" ORDER BY tblstandard.Derivative_Standard_Equipment_Category_Description ')->queryAll();
        $options = Yii::$app->db->createCommand('select Derivative_Option_Category_Description, Derivative_Option_Description, Derivative_Option_Basic_Price FROM tbloption where tbloption.Derivative_CAP_Code = "'.$product["Derivative_CAP_Code"].'" ORDER BY Derivative_Option_Category_Description ')->queryAll();
        $pricing = Yii::$app->db->createCommand('select Derivative_Option_Category_Description, Derivative_Option_Description, Derivative_Option_Basic_Price FROM tbloption where tbloption.Derivative_CAP_Code = "'.$product["Derivative_CAP_Code"].'" ORDER BY Derivative_Option_Category_Description ')->queryAll();
        return $this->render('car-leasing', array('content'=>$product,'specs'=>$specs,'standard'=>$standard,'options'=>$options));
     }
}
