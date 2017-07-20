<?php include('config/__import.inc.php'); ?>
<?php include('functions/__import.inc.php'); ?>
<?php include('queries/__import.inc.php'); ?>
<!doctype html>
<html id="top">
	<head>
		<title><?= $sitename; ?> &mdash; <?= formatDateTime(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="<?= $paths->libs; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="<?= $paths->css ?>main.css" rel="stylesheet" />
		<style>
		</style>
	</head>
	<body>

		<header class="header">
			<div class="wrap header__wrap">
				<div class="header__logo">
					<img alt="" src="http://via.placeholder.com/200x75" />
				</div>
				<button class="js-main-nav__toggle main-nav__toggle">
					Menu
				</button>
				<?php include('includes/main-nav.inc.php'); ?>
			</div>
		</header>
