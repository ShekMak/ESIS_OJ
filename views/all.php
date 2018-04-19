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
			<div class="toutes-publications">
				<h2>Toutes les publications</h2>
				<?php
                    require_once('../controllers/all_commentaire.php');
                    foreach ($data as $d){
                ?>
                    <p class="post-content">
                    <?=$d['contenu']?>
                    <a href="suite.php">Lire la suite</a>
                    </p>
                    <br/>
                    <p class="post-like">
                        <em>Posté le <?=$d['date']?></em>
                        <span class="like-dislike">
                                <a href="like.php?id=<?=$d['id']?>">Like</a>(<?=$d['nblike']?>) |
                                <a href="dislike.php?id=<?=$d['id']?>">Dislike</a>(<?=$d['nbdislike']?>)
                            </span>
                    </p>
                <?php } ?>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>