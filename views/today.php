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
            <?php
                include_once('../controllers/the_day.php');
                if(count($data)< 1){
            ?>
                <div class="aucune-publication">
                    <h2>Aucune publication du jour</h2>
                    <br/><a href="new.php">Publier</a>
                </div>
            <?php  }else{ ?>
            <div class="toutes-publications">
                <a href="new.php">Publier</a>
                <h2>Quelques publications du jour</h2>
                <?php
                foreach ($data as $d){
                    ?>
                    <p class="post-content">
                        <?=$d['contenu']?>
                        <a href="suite.php?id=<?=$d['id']?>">Lire la suite</a>
                    </p>
                    <br/>
                    <p class="post-like">
                        <em>Posté le <?=$d['date']?></em>
                        <span class="like-dislike">
                            <a href="like.php?id_=<?=$d['id']?>">Like</a>(<?=$d['nblike']?>) |
                            <a href="dislike.php?id_=<?=$d['id']?>">Dislike</a>(<?=$d['nbdislike']?>)
                        </span>
                    </p>
                <?php } } ?>
            </div>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>