<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/header.php'); ?>
	
</head>

<body>
<?php $this->beginBody() ?>

<header class="light_banner">
	<?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/navbar.php'); ?>
	<?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/breadcrumbs.php'); ?>
</header>


        <?= Alert::widget() ?>
        <?= $content ?>


<footer class="footer">
	<?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/footer.php'); ?>
</footer>
<?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/js_includes.php'); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
