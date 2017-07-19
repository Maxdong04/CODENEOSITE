<?php session_start(); ?>
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
	<div class="panel" style="background:white; padding-top:30px;">
        <div class="panel_in" style="background:white;">
            <div class="right">
				<div class="pad">
					<?php 
							
						if(isset($_SESSION['emails'])){
							header('location:index.php');
						}else{
							if(isset($_GET['fails'])){
								echo '
								<strong>Connexion à votre compte</strong>
								<span>Connectez-vous pour acheter un code<b>.</b> Si vous êtes nouveau, <br /> vous devez <a href="codeneosurf_inscription.php">créer un compte d\'abord</a> <b>.</b></span>
								<div class="exist"> <img src="src/red_cr.png" class="red_cr" /> Login ou mot de pase incorrect! </div>
								<form action="login.php" method="post">
									<div class="seekbox"> 
										<input type="text" name="emails" placeholder="Login: votre email"> 
										<input type="password" name="pwd" placeholder="Mot de passe"> 
										<input type="submit" value="CONNEXION" class="sub">
									</div>
								</form>
								';
							}else{
								echo '
								<strong>Connexion à votre compte</strong>
								<span>Connectez-vous pour acheter un code<b>.</b> Si vous êtes nouveau, <br /> vous devez <a href="codeneosurf_inscription.php">créer un compte d\'abord</a> <b>.</b></span>
								<form action="login.php" method="post">
									<div class="seekbox"> 
										<input type="text" name="emails" placeholder="Login: votre email"> 
										<input type="password" name="pwd" placeholder="Mot de passe"> 
										<input type="submit" value="CONNEXION" class="sub">
									</div>
								</form>
								';
							}
							
						}
					?>
				</div>
			</div>
			<div class="right"> 
				<div class="pad"> 
					<img src="src/golog.png" class="gosign" />
				</div>
			</div>
        </div>
    </div>
	
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>