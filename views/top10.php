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
				<h2>Top 10</h2>
                <?php
                    include_once('../controllers/top10.php');
                    foreach ($data as $d) {
                ?>
                    <p class="post-content"><?=$d['contenu']?></p>
                    <br/>
                    <p class="post-like">
                        <em>Posté le <?=$d['date']?></em>
                        <span class="like-dislike">
                            <a href="like.php">Like</a>(<?=$d['nblike']?>) |
                            <a href="dislike.php">Dislike</a>(<?=$d['nbdislike']?>)
                        </span>
                    </p>
                <?php } ?>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
		
	</body>
</html>