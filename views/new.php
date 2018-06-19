<?php require_once('check_connexion.php'); ?>
<!doctype html>
<html>
	<head>
		<title>ESIS-OJ</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="static/css/style.css" />
		<link rel="stylesheet" href="static/css/today.css" />
		<link rel="stylesheet" href="static/css/suite.css" />
	</head>
	<body>
		<?php include_once('head.php'); ?>
		<?php
            if (isset($_GET['insert'])){
                echo '<center><br/><em>Votre publication a été ajoutée</em></center>';
            }elseif (isset($_GET['update'])){
                echo '<center><br/><em>Une erreur est survenue lors de votre publication! Veuillez recommencer s\'il vous plaît</em></center>';
            }
            else{

            }
        ?>
		<div class="content">
			<div class="toutes-publications">
				<h2>Nouvelle publication</h2>
				<form method="post" action="../controllers/add_publication.php" class="add-publication">
					<textarea name="contenu" placeholder="" required></textarea><br />
					<input type="submit" value="Publier" />
				</form>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>