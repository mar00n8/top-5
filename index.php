<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>TOP 5</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<div id="wrapper">
		<!-- header -->
		<header class="header">
			<!-- shell -->
			<div class="shell">
				<h1 id="logo"><a href="#">TOP 5</a></h1>
				<!-- navigation -->
				<nav id="navigation">
					<ul>
						<li class="active"><a href="index.php">Главная</a></li>
						<li><a href="?do=interesting">Интересное</a></li>
						<li><a href="?do=history">Историческое</a></li>
						<li><a href="?do=using">Применение</a></li>
						<li><a href="?do=immortance">Общее значение</a></li>
					</ul>
				</nav>
				<!-- navigation -->
			</div>
			<!-- end of shell -->
		</header>
		<!-- end of header -->
		<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">
				<?
				switch ($_GET['do']) {
				case 'interesting' : require_once("inc/interesting.php");
				break;
				case 'history' : require_once("inc/history.php");
				break;
				case 'using' : require_once("inc/using.php");
				break;
				case 'immortance' : require_once("inc/immortance.php");
				break;
				default: require_once('inc/slider.html');
				}
				?>
				</section>
				<!-- slider-holder -->
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
		<div id="footer-push"></div>
	</div>	
	<!-- footer -->
	<div id="footer">
		<!-- shell -->
		<div class="shell">
			<div class="widgets">

				<!-- navigation -->
				<nav id="navigation">
					<h4>Название</h4>
					<ul>
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="#">Интересное</a></li>
						<li><a href="#">Историческое</a></li>
						<li><a href="#">Применение</a></li>
						<li><a href="#">Общее значение</a></li>
					</ul>
				</nav>
				<!-- navigation -->

				<!-- contacts -->
				<? include ("inc/contacts.php") ?>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of widgets -->

			<!-- footer-bottom -->
			<div class="footer-bottom">
				<!-- footer-nav -->
				<div class="footer-nav">
					<ul>
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="#">Интересное</a></li>
						<li><a href="#">Историческое</a></li>
						<li><a href="#">Применение</a></li>
						<li><a href="#">Общее значение</a> </li>
					</ul>
				</div>
				<!-- end of footer-nav -->
				<p class="copy">&copy; Mar00n8. Design for <a href="http://hneu.edu.ua" target="_blank">ХНЭУ</a></p>
			</div>
			<!-- end of footer-bottom -->
		</div>
		<!-- end of shell -->
	</div>
	<!-- end of footer -->
</body>
</html>