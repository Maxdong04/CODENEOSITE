<?php
	if(isset($_SESSION['emails'])){
		include 'plug.php';
		
		$res=$bdd->prepare('SELECT * FROM codeneosurf_commande WHERE id_id=:id_id AND stat=:stat ORDER BY ID DESC');
		$res->execute(array(':id_id'=>$id_id,':stat'=>'wait'));
		$show =$res->fetch();
		if($show){
			echo '
			<div class="valicomm">
				<span>Pour valider votre commande de '.$show['codeneo'].'&euro; veuillez procéder au paiement</span> <a href="codeneosurf_moyen_de_paiement.php">Continuer vers le paiement</a>
			</div>
		';
		}
	}
?>
<span class="alert_box"></span>