<?php require_once('check_connexion.php');
    if (isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header('Location:all.php');
    }
?>
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
		
		<div class="content">
            <?php
                include_once('../controllers/the_publication.php');
            ?>
			<div class="toutes-publications">
				<p class="post-like">
					<strong><em>Posté le <?=$data['date']?></em></strong>
					<span class="like-dislike">
						<a href="like.php?id=<?=$data['id']?>">Like</a>(<?=$data['nblike']?>) |
						<a href="dislike.php?id=<?=$data['id']?>">Dislike</a>(<?=$data['nbdislike']?>)
					</span>
				</p>
				<p class="post-content"><?=$data['contenu']?></p>
                <?php  include_once('../controllers/all_commentaire.php')?>
				<h3>
                    <?php
                        if ($nombreCommentaire >= 2)
                            echo  $nombreCommentaire.' Commentaires';
                        else
                            echo $nombreCommentaire.' Commentaire';
				    ?>
                </h3>
                <?php  foreach ($donnees as $d){ ?>
                    <p class="post-content-comment">$d['contenu']</p>
                    <br/>
                    <p class="post-like-comment">
                        <em>Posté le $d['date']</em>
                        <span class="like-dislike-comment">
                            <a href="like.php">Like</a>($d['nblike']) |
                            <a href="dislike.php">Dislike</a>($d['nbdislike'])
                        </span>
                    </p>
                <?php  } ?>
				<form method="post" action="" class="add-comment">
					<textarea name="contenu" placeholder="Votre commentaire ici" required></textarea><br />
					<input type="submit" value="Ajouter" />
				</form>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>