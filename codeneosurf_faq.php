﻿<?php session_start(); ?>
<?php include 'inc/logg.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
	<?php include 'inc/meta.php'; ?>
    <title>Codeneosurf.com</title>
    <link rel="stylesheet" href="layout/layout.css">
</head>
<body>
    <?php include 'inc/top.php'; ?>
    <div class="sep"></div>
	<?php  include 'inc/commande_wait.php'; ?>
    <div class="title" style="padding-top:40px;">
        <h1>Faq <input type="text" placeholder="Rechercher une question..." class="seekfaq" id="seekfaq" /></h1> 
    </div>
	<div class="comment">
		<div class="comment_in">
			<?php 
				include 'plug.php';
				
				$res=$bdd->query('SELECT * FROM codeneosurf_faq ORDER BY ID ASC');
				while($show =$res->fetch()){
				echo '
				<div class="poc">
					<strong>'.$show['titre'].'</strong>
					<p>'.$show['message'].'</p>
				</div>
				';
						}
			?>
		</div>
	</div>
	
	
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>