<?php require_once('check_connexion.php'); ?>
<!doctype html>
<html>
	<head>
		<title>ESIS-OJ</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="static/css/style.css" />
		<link rel="stylesheet" href="static/css/today.css" />
	</head>
	<body>
		<?php include_once('head.php'); ?>
		
		<div class="content">
			<div class="aucune-publication">
				<h2>Aucune publication du jour</h2>
				<br/><a href="new.php">Publier</a>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>