<?php session_start(); ?>
<?php	
		
if(isset($_POST['nom']) AND $_POST['prenom'] AND $_POST['pays'] AND $_POST['tele'] AND $_POST['message']){
			
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$pays = $_POST['pays'];
			$tele = $_POST['tele'];
			$emails = $_POST['emails'];
			$message = $_POST['message'];
			
			include '../plug.php';
			
			
			$ress=$bdd->prepare('INSERT INTO codeneosurf_message(nom, prenom, pays, tele, emails, message) VALUES(:nom, :prenom, :pays, :tele, :emails, :message)');
			$ress->execute(array(
				':nom'=>$nom,
				':prenom'=>$prenom,
				':pays'=>$pays,
				':tele'=>$tele,
				':emails'=>$emails,
				':message'=>$message
			));
			//echo 'Bravo votre compte a été créé';
			header('location:../codeneosurf_contact.php?succes=true');
			
			
		}else{
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$pays = $_POST['pays'];
			$tele = $_POST['tele'];
			
			header('location:../codeneosurf_contact.php?fail=fill&nom='.$nom.'&prenom='.$prenom.'&pays='.$pays.'&tele='.$tele.'');
		}
		
		
		
?>