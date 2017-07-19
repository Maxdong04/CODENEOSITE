<div class="carte_pan">
        <div class="carte_in">
			<?php 
				include 'plug.php';
				
				$res=$bdd->query('SELECT * FROM codeneosurf_codes WHERE etat="ok" ORDER BY ID ASC');
				while($show =$res->fetch()){
				echo '
				<div class="'.$show['prix'].'" id="'.$show['prix_cfa'].'">
					<span>'.$show['prix'].'&euro;</span>
					<b>'.$show['prix_cfa'].' <i>Fcfa</i></b>
				</div>
				';
						}
			?>
            
        </div>
		<div class="title">
			<br />
			<span>Moyens de paiements</span> <br />
			<img src="src/mpay.png" style="width:70%; padding-top:20px;" />
		</div>
    </div>