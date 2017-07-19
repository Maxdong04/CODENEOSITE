<div class="pop">
	<div class="popin"> 
		<div class="popac">
			<div class="tit">Votre Commande Neosurf <img src="src/cloz.png" style="float:right; cursor:pointer;" class="close" /> </div>
			<div class="pcc">
				<center> Chargement </center>
			</div>
		</div>
	</div>
</div>
<div class="top">
    <div class="start">
        <div class="pad">
			Distributeur de carte Neosurf en Afrique
			<a href="codeneosurf_faq.php"> <img src="src/faq.png" style="height:15px; float:left; padding-right:5px;"> Faq </a>
			<a href="codeneosurf_comment_utiliser_code_neosurf.php"> <img src="src/qest.png" style="height:15px; float:left; padding-right:5px;"> Comment utiliser les codes Neosurf? </a>
			<a href="codeneosurf_moyen_de_paiement.php"> <img src="src/pay.png" style="height:15px; float:left; padding-right:5px;"> Moyens de paiement </a>
			<a> <img src="src/call.png" style="float:left; padding-right:5px;" />(00225) 67 09 09 67</a>
			<?php
				if(isset($_SESSION['emails'])){
					echo '<a href="codeneosurf_code_panel.php" style="color:#ed008c;">Mes codes Neosurf</a>';
				}
			?>
		</div>
    </div>
    <h1><a href="index.php">CodeNeosurf</a></h1>
	
	<div class="set_button"> </div>
	
	<?php
		if(isset($_SESSION['emails'])){
		// Connected
	?>
		<div class="logbox"><a style="color:white; background:#ed008c;" href="codeneosurf_code_panel.php">Espace client</a></div>
		<div class="menu">
			<a class="alink" href="index.php" style="color:;">Accueil</a>
			<a class="alink" href="codeneosurf_comment_ca_marche.php">Comment ça marche?</a>
			<a class="alink" href="codeneosurf_acheter_code.php" style="color:;">Acheter un code</a>
			<a class="alink" href="codeneosurf_carte_visa_postecash.php" style="color:;">Cartes Visa</a>
			<a class="alink" href="codeneosurf_contact.php">Contact</a>
			<a class="alink" href="deco.php">Déconnexion</a>
			<div class="more_menu">
				<a href=""> <img src="src/faq.png" style="height:15px; float:left; padding-right:5px;"> Faq</a>
				<a href=""> <img src="src/qest.png" style="height:15px; float:left; padding-right:5px;"> Comment utiliser les codes Neosurf?</a>
				<a href=""> <img src="src/pay.png" style="height:15px; float:left; padding-right:5px;"> Moyens de paiement</a>
			</div>
		</div>
	<?php
		}else{
		// Off
	?>
		<div class="logbox"><a href="codeneosurf_connexion.php">Connexion</a></div>
		<div class="menu">
			<a class="alink" href="index.php" style="color:#ed008c;">Accueil</a>
			<a class="alink" href="codeneosurf_comment_ca_marche.php">Comment ça marche?</a>
			<a class="alink" href="codeneosurf_acheter_code.php" style="color:;">Acheter un code</a>
			<a class="alink" href="codeneosurf_carte_visa_postecash.php" style="color:;">Cartes Visa</a>
			<a class="alink" href="codeneosurf_contact.php">Contact</a>
			<a class="alink" href="codeneosurf_inscription.php">Inscription</a>
			<div class="more_menu">
				
				<a href="codeneosurf_faq.php"> <img src="src/faq.png" style="height:15px; float:left; padding-right:5px;"> Faq </a>
				<a href="codeneosurf_comment_utiliser_code_neosurf.php"> <img src="src/qest.png" style="height:15px; float:left; padding-right:5px;"> Comment utiliser les codes Neosurf? </a>
				<a href="codeneosurf_moyen_de_paiement.php"> <img src="src/pay.png" style="height:15px; float:left; padding-right:5px;"> Moyens de paiement </a>
				<a> <img src="src/call.png" style="float:left; padding-right:5px;" />(00225) 67 09 09 67</a>
				<?php
					if(isset($_SESSION['emails'])){
						echo '<a href="codeneosurf_code_panel.php">Mes codes</a>';
					}
				?>
			</div>
		</div>
	<?php
		}
	?>
	
</div>