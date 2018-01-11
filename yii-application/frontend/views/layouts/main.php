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
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= Html::encode($this->title) ?></title>
    <?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/header.php'); ?>






</head>
<body>
<header>
    <?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/navbar.php'); ?>
    <?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/breadcrumbs.php'); ?>


</header>
<?= $content ?>


<footer id="footer">
    <?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/footer.php'); ?>
</footer>
<?php include('C:\xampp\htdocs\yii-application\frontend\views\site\includes/js_includes.php'); ?>


</body>
</html>

<?php $this->endPage() ?>
