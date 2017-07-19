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
					?>
						<strong>Création de compte</strong>
						<span>Créez un compte gratuitement pour pouvoir <br />acheter les codes Neosurf</span>
						<div class="formal"> 
						<?php 
						
							if(isset($_GET['exist']) AND $_GET['exist']=='account'){
								
								$nom = $_GET['nom'];
								$prenom = $_GET['prenom'];
								$pays = $_GET['pays'];
								$tele = $_GET['tele'];
								$emails = $_GET['emails'];
								$pwd = $_GET['pwd'];
								
								echo ' <div class="exist" id="exist"> <img src="src/red_cr.png" class="red_cr" /> Un compte est déjà associé à cette adresse email, utilisez une autre adresse ou connectez-vous si elle vous appartient! </div> ';
								
							}else if(isset($_GET['fail']) AND $_GET['fail']=='fill'){
								
								$nom = $_GET['nom'];
								$prenom = $_GET['prenom'];
								$pays = $_GET['pays'];
								$tele = $_GET['tele'];
								$emails = $_GET['emails'];
								$pwd = $_GET['pwd'];
								
								echo ' <div class="exist" id="exist"> <img src="src/red_cr.png" class="red_cr" /> Veuillez remplir tous les champs du formulaire pour valider votre inscription </div> ';
								
							}else{
								$nom = '';
								$prenom = '';
								$pays = '';
								$tele = '';
								$emails = '';
								$pwd = '';
							}
						
						?>
                        <div class="inpux">
                            <form action="create/create_account.php" method="post">
								<div class="ent">
									<input type="text" name="nom" class="nom" placeholder="Nom" value="<?php echo $nom; ?>">
									<input type="text" name="prenom" class="prenom" placeholder="Prénom" value="<?php echo $prenom; ?>">
								</div>
								<input type="text" name="pays" class="" placeholder="Pays" value="<?php echo $pays; ?>">
								<input type="text" name="tele" class="" placeholder="Téléphone" value="<?php echo $tele; ?>">
								<input type="text" name="emails" class="" placeholder="Email" value="<?php echo $emails; ?>">
								<input type="text" name="pwd" class="" placeholder="Mot de passe" value="">
								<input type="text" name="c_pwd" class="" placeholder="Confirmation mot de passe" value="">
								<input type="submit" class="sub" value="VALIDER LE COMPTE">
							</form>
                        </div>
                    </div>
					<?php 
						}
					?>
				</div>
			</div>
			<div class="right"> 
				<div class="pad"> 
					<img src="src/gosign.png" class="gosign" />
				</div>
			</div>
        </div>
    </div>
	
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>