<?php  
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);

define('YII_DEBUG', true);
require __DIR__.'/../vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__.'/../config/web.php';
$yii = new yii\web\Application($config);
$yii->run();


?>