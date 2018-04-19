<?php require_once('check_connexion.php');
    if (isset($_GET['id'])){

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
			<div class="toutes-publications">
				<p class="post-like">
					<strong><em>Posté le 02/10/2018</em></strong> 
					<span class="like-dislike">
						<a href="like.php">Like</a>(25) | 
						<a href="dislike.php">Dislike</a>(1)
					</span>
				</p>
				<p class="post-content">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
					Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
					Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
					Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.
				</p>
				<h3>2 Commentaires</h3>
				<p class="post-content-comment">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
					porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, 
					purus lectus malesuada libero
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
					porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, 
					purus lectus malesuada libero
				</p>
				<br/>
				<p class="post-like-comment">
					<em>Posté le 02/10/2018</em> 
					<span class="like-dislike-comment">
						<a href="like.php">Like</a>(25) | 
						<a href="dislike.php">Dislike</a>(1)
					</span>
				</p>
				<p class="post-content-comment">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
					porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, 
					purus lectus malesuada libero
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
					porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, 
					purus lectus malesuada libero
				</p>
				<br/>
				<p class="post-like-comment">
					<em>Posté le 02/10/2018</em> 
					<span class="like-dislike-comment">
						<a href="like.php">Like</a>(25) | 
						<a href="dislike.php">Dislike</a>(1)
					</span>
				</p>
				<form method="post" action="" class="add-comment">
					<textarea name="contenu" placeholder="Votre commentaire ici" required></textarea><br />
					<input type="submit" value="Ajouter" />
				</form>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>