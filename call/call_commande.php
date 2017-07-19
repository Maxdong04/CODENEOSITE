	<?php session_start(); ?>
	<?php 
			
		if(isset($_SESSION['emails'])){
			include '../plug.php';
			$reo=$bdd->prepare('SELECT * FROM codeneosurf_account WHERE emails=:emails');
			$reo->execute(array(':emails'=>$_SESSION['emails']));
			while($show=$reo->fetch()){
				$id_id = $show['id'];
				$nom = $show['nom'];
				$prenom = $show['prenom'];
				$pays = $show['pays'];
				$tele = $show['tele'];
				$emails = $show['emails'];
				$pwd = $show['pwd'];
			}

		?>
			
			<div class="this">
				<span><?php echo $_POST['getClassCode']; ?>&euro;</span>
				<b style="color:white;"><?php echo $_POST['getIdCode']; ?> <i>Fcfa</i></b>
			</div>
			<br />
			<form action="create/create_commande.php" method="post">
				<input type="hidden" name="id_id" value="<?php echo $id_id; ?>" />
				<input type="hidden" name="nompre" value="<?php echo $nom.' '.$prenom; ?>" />
				<input type="hidden" name="emails" value="<?php echo $emails; ?>" />
				<input type="hidden" name="codeneo" value="<?php echo $_POST['getClassCode']; ?>" />
				<input type="hidden" name="pays" value="<?php echo $pays; ?>" />
				<input type="hidden" name="tele" value="<?php echo $tele; ?>" />
				<center><p>Êtes-vous sûr de vouloir commander un code de <?php echo $_POST['getClassCode'].'&euro;'; ?></p></center>
				<br />
				<div class="process"> <input type="submit" value="Valider" id="valo" /> </td> <td><input type="reset" id="rest" class="close" value="Annuler" /> </div>
			</form>
		<?php
		}else{
		?>
			<p style="margin-bottom:15px;">Connectez-vous avant de pourvoir acheter un code Neosurf!</p>
			<form action="login.php" method="post">
				<input type="text" name="emails" placeholder="Login: votre email" class="ipp"> 
				<input type="password" name="pwd" placeholder="Mot de passe" class="ipp"> 
				<input type="submit" value="CONNEXION" class="subs">
			</form>
		
		<?php 
			}
		?>

	<script>
		$(function(){
			$('.close').click(function(){
               $('.pop').fadeOut(200);
           }); 
		});
	</script>
