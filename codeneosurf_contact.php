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
	<div class="panel" style="background:white; padding-top:30px;">
        <div class="panel_in" style="background:white;">
            <div class="right">
				<div class="pad">
					
					<?php 
							
					if(isset($_GET['succes'])){
						echo ' <div class="existgood" id="exist"> <img src="src/gre_cr.png" class="red_cr" /> Votre message a été envoyé avec succès, codeneosurf vous contactera sous peu </div> 
						<span>Vous voulez écrire un autre message? <a href="codeneosurf_contact.php">écrire un nouveau</a> </span>
						';
					}else{
					?>
						<strong>Contactez-nous</strong>
						<span>Remplisser le formulaire pour nous contacter</span>
						<div class="formal"> 
						<?php 
						
							if(isset($_GET['fail']) AND $_GET['fail']=='fill'){
								
								$nom = $_GET['nom'];
								$prenom = $_GET['prenom'];
								$pays = $_GET['pays'];
								$tele = $_GET['tele'];
								$emails = $_GET['emails'];
								
								echo ' <div class="exist" id="exist"> <img src="src/red_cr.png" class="red_cr" /> Veuillez remplir tout les champs avant l\'envoi du formulaire </div> ';
								
							}else if(isset($_GET['fail']) AND $_GET['fail']=='fill'){
								
								$nom = $_GET['nom'];
								$prenom = $_GET['prenom'];
								$pays = $_GET['pays'];
								$tele = $_GET['tele'];
								$emails = $_GET['emails'];
								
								echo ' <div class="exist" id="exist"> <img src="src/red_cr.png" class="red_cr" /> Veuillez remplir tout les champs avant l\'envoi du formulaire </div> ';
								
							}else{
								$nom = '';
								$prenom = '';
								$pays = '';
								$tele = '';
								$emails = '';
							}
						
						?>
                        <div class="inpux">
                            <form action="create/create_message.php" method="post">
								<div class="ent">
									<input type="text" name="nom" class="nom" placeholder="Nom" value="<?php echo $nom; ?>">
									<input type="text" name="prenom" class="prenom" placeholder="Prénom" value="<?php echo $prenom; ?>">
								</div>
								<input type="text" name="pays" class="" placeholder="Pays" value="<?php echo $pays; ?>">
								<input type="text" name="tele" class="" placeholder="Téléphone" value="<?php echo $tele; ?>">
								<input type="text" name="emails" class="" placeholder="Email" value="<?php echo $emails; ?>">
								<textarea name="message" class="redige" cols="30" rows="8" placeholder="Rediger message"></textarea>
								<input type="submit" class="sub" value="ENVOYER LE MESSAGE">
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
					<img src="src/gocont.png" class="gosign" />
				</div>
			</div>
        </div>
    </div>
	
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>