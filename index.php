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
	<?php include 'inc/cycle.php'; ?>
    <div class="panel">
        <div class="panel_in">
            <div class="left">
				<center><img src="src/logo.png" alt="" /></center>
                <p>Codeneosurf<b>.</b>com est une plateforme de vente de codes neosurf en Afrique occidentale et centrale<b>.</b> Inscrivez-vous gratuitement et commencez à acheter vos codes neosurf pour effectuer vos transactions sur internet en toute sécurité<b>.</b> </p>
				<center> 
					<strong>Connexion à votre compte</strong>
					<form action="create/create_account.php" method="post">
						<div class="pack_ell_all">
							<input type="text" name="emails" class="emails" placeholder="Login: email" value="">
							<input type="text" name="pwd" class="pwd" placeholder="Mot de passe" value="">
						</div>
						<input type="submit" class="sub" value="Connexion">
					</form>
					<span>Si vous êtes nouveau, <a href="codeneosurf_inscription.php">créez un compte</a><b>.</b></span>
				</center>
            </div>
            <div class="right">
				<div class="pad">
					<strong>Création de compte</strong>
					<span>Créez un compte gratuitement pour pouvoir <br />acheter les codes Neosurf</span>
					<div class="formal"> 
						<form action="create/create_account.php" method="post">
							<div class="ent">
								<input type="text" name="nom" class="nom" placeholder="Nom" value="">
								<input type="text" name="prenom" class="prenom" placeholder="Prénom" value="">
							</div>
							<div class="ent"> 
								<input type="text" name="pays" class="nom" placeholder="Pays" value="">
								<input type="text" name="tele" class="prenom" placeholder="Téléphone" value="">
							</div>
							<input type="text" name="emails" class="emails" placeholder="Email" value="">
							<input type="text" name="pwd" class="" placeholder="Mot de passe" value="">
							<input type="text" name="c_pwd" class="" placeholder="Confirmation mot de passe" value="">
							<input type="submit" class="sub" value="VALIDER LE COMPTE">
						</form>
					</div>
				</div>
			</div>
        </div>
    </div>
    <div class="big_sep">
        <img src="src/arro.png" alt="">
    </div>
    <div class="title">
        <h1>Cartes Neosurf disponlibles</h1> 
    </div>
	
    <?php include 'inc/code_line.php'; ?>
	
	<div class="big_sep2">
        <img src="src/arro.png" alt="">
    </div>
	
	<?php include 'inc/world.php'; ?>
	
	<div class="big_sep3"> <img src="src/arro.png" alt=""> </div>
	
	<?php include 'inc/visa.php'; ?>
	
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>