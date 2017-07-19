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
    <div class="title" style="padding-top:40px;">
        <h1>Comment ça marche?</h1> 
    </div>
	<div class="comment">
		<div class="comment_in"> 
			<div class="com_box">
				<div class="com_box_border">
					<i>1</i>
					<strong>Inscrivez-vous sur <br /> le site</strong>
					<span>Créez un compte gratuit en remplissant le formulaire d’inscription</span>
					<div class="go"> <a href="codeneosurf_inscription.php" target="_blank">S'inscrire</a> </div>
				</div>
			</div>
			<div class="com_box">
				<div class="com_box_border">
					<i>2</i>
					<strong>Connectez-vous à l’espace client</strong>
					<span>Entrez vos e-mail et mot de passe pour accéder à l’espace client</span>
					<div class="go"> <a href="">Connexion</a> </div>
				</div>
			</div>
			<div class="com_box">
				<div class="com_box_border">
					<i>3</i>
					<strong>Passez votre commande</strong>
					<span>Commandez votre code Neosurf en cliquant sur le code à acheter</span>
					<em>|</em>
					<div class="go"> <a href="">Commandez carte</a> </div>
				</div>
			</div>
			<div class="com_box">
				<div class="com_box_border">
					<i>4</i>
					<strong>Payez <br />maintenant</strong>
					<span>Procédez au paiement par tranfert mobile ou par mandat </span>
					<div class="go"> <a href="">Moyens de paiement</a> </div>
				</div>
			</div>
			<div class="com_box">
				<div class="com_box_border">
					<i>5</i>
					<strong>Recevez votre code acheté</strong>
					<span>Recevez votre code dans la section « NOUVEAU CODE » de votre espace client</span>
					<div class="go"> <a href="" style="background:#ed008c;">Commencez</a> </div>
				</div>
			</div>
		</div>
	</div>
	
	
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>