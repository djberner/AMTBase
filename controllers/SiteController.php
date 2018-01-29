<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionManulist()
    {
        $page = Yii::$app->db->createCommand('SELECT * FROM tblpages WHERE PageName="manufacturer"')->queryOne();
        $manulogos = Yii::$app->db->createCommand('SELECT * FROM tbllogos WHERE fuktrading=1')->queryAll();


        return $this->render('manulist',array('page'=>$page,'manulogos'=>$manulogos));
    }
    public function actionShowroom($categories)
    {
        $params = explode('/', $categories);
        $page = Yii::$app->db->createCommand('SELECT * FROM tblpages WHERE PageName="manufacturer"')->queryOne();

        $product = Yii::$app->db->createCommand('SELECT tblbase.Derivative_CAP_ID FROM tblbase WHERE tblbase.Derivative_CAP_ID IN ("'.$params[0].'","'.$params[1].'","'.$params[2].'") ')->queryAll();
        $vehicles = array();
        for ($i = 0; $i <sizeof($product); $i++){


            /*
                   echo "<pre>";
                    var_dump($samplevehiclemodelscount);
                    echo "</pre>";*/
            $vehicle = Yii::$app->db->createCommand('SELECT tblbase.*, tbllogos.*, tblkeyspecs.* FROM tblbase  LEFT JOIN tbllogos ON tblbase.Manufacturer_Name=tbllogos.fManu LEFT JOIN tblkeyspecs ON tblbase.Derivative_CAP_ID=tblkeyspecs.Derivative_CAP_ID WHERE tblbase.Derivative_CAP_ID ="'.$product[$i]["Derivative_CAP_ID"].'"')->queryAll();
            $specs = Yii::$app->db->createCommand('SELECT Technical_Category_Description,Technical_Long_Description,Technical_Value FROM tblspec WHERE  Derivative_CAP_ID ="'.$product[$i]["Derivative_CAP_ID"].'"  ORDER BY Technical_Category_Description ')->queryAll();
            $standard = Yii::$app->db->createCommand('select tblstandard.Derivative_Standard_Equipment_Category_Description, Derivative_Standard_Equipment_Description FROM tblstandard where  Derivative_CAP_ID ="'.$product[$i]["Derivative_CAP_ID"].'" ORDER BY tblstandard.Derivative_Standard_Equipment_Category_Description ')->queryAll();
            $options = Yii::$app->db->createCommand('select Derivative_Option_Category_Description, Derivative_Option_Description, Derivative_Option_Basic_Price FROM tbloption where  Derivative_CAP_ID ="'.$product[$i]["Derivative_CAP_ID"].'" ORDER BY Derivative_Option_Category_Description ')->queryAll();
            $pricing = Yii::$app->db->createCommand('select Derivative_Rental_Term_Months, Derivative_Rental_Annual_Mileage, Derivative_Monthly_Rental_Price, Derivative_Monthly_Maintenance_Price FROM tblprice  JOIN tblbase ON tblbase.Derivative_CAP_Code=tblprice.Derivative_CAP_Code where  tblbase.Derivative_CAP_ID ="'.$product[$i]["Derivative_CAP_ID"].'" ')->queryAll();
            $image = Yii::$app->db->createCommand('SELECT Image_Set_ID FROM tblimage WHERE CAP_Id ="'.$product[$i]["Derivative_CAP_ID"].'" ')->queryAll();
            //Derivative_CAP_ID
            //$product["Derivative_CAP_ID"]["vehicle"]=$vehicle;
            $vehicles[$i]["vehicle"]=$vehicle;
            $vehicles[$i]["specs"]=$specs;
            $vehicles[$i]["standard"]=$standard;
            $vehicles[$i]["options"]=$options;
            $vehicles[$i]["pricing"]=$pricing;
            $vehicles[$i]["image"]=$image;


        }



       // $id = Yii::app()->request->getQuery('id');

        return $this->render('showroom',array('page'=>$page,'product'=>$vehicles));
    }
}
