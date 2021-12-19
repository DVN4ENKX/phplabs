<?php include 'lib.inc.php';
include 'data.inc.php';
include 'cookie.inc.php';
$title = 'Наш сайт';
$header = "$welcome Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));
if(isset($_GET['id']))
	$id = $_GET['id'];
else
	$id = 0;
?>

<!DOCTYPE html>
<html>

<head>
	<title><?= $title?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="header">
		<!-- Верхняя часть страницы -->
		<?php include_once 'cookie.php';
		include_once 'top.inc.php' ?>
		<!-- Верхняя часть страницы -->
	</div>

	<div id="content">
		<!-- Заголовок -->
		<h1>  <?= $header?> </h1>
		<!-- Заголовок -->
		<!-- Область основного контента -->
		<?php switch($id)
	{
		case 'home': include 'index.inc.php'; break;
		case 'about': include 'about.php'; break;
		case 'contact': include 'contact.php';break;
		case 'table': include 'table.php'; break;}?>
		<!-- Область основного контента -->
	</div>
	<div id="nav">
		<!-- Навигация -->
		<h2>Навигация по сайту</h2>
		<!-- Меню -->
		<?php include_once "menu.inc.php" ?>
		<!-- Меню -->
		<!-- Навигация -->
	</div>
	<div id="footer">
		<!-- Нижняя часть страницы -->
		<?php include_once "bottom.inc.php" ?>
		<!-- Нижняя часть страницы -->
	</div>
</body>

</html>