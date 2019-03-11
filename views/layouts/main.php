<?php  
use yii\bootstrap\NavBar;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yii2</title>
	<?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>	
<div>
	<?php  
	NavBar::begin([
		'brandLabel' => 'KSV',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => ' navbar-inverse navbar-fixed-top'
		],
	]);
	NavBar::end();
	?>
</div>
<div class="container" style="margin-top: 70px">
	<?= $content ?>
</div>	

<?php  $this->endBody(); ?>	
</body>
</html>
<?php $this->endPage(); ?>