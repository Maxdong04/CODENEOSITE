<?php session_start(); ?>
<?php	
		
		if(isset($_POST['emails']) AND $_POST['pwd']){
			
			$emails = $_POST['emails'];
			$pwd = $_POST['pwd'];
			
			include 'plug.php';
			
			$res=$bdd->prepare('SELECT * FROM codeneosurf_account WHERE emails=:emails AND pwd=:pwd');
			$res->execute(array(':emails'=>$emails,':pwd'=>$pwd));
			$show =$res->fetch();
			if($show){
				$_SESSION['emails'] = $emails;
				header('location:espace_membre.php');
			}else{
				header('location:codeneosurf_connexion.php?fails=fill');
			}	
		}else{
			header('location:codeneosurf_connexion.php?fails=fill');
		}
		
		
		
?>