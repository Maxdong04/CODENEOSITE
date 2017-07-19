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
	<?php if(isset($_SESSION['emails'])){ }else{ header('location:index.php'); }
	if(isset($_GET['dtealkbhkjdkjhjdujdckhjkdfkdfjkjdfdfdd'])){
		$idb = $_GET['dtealkbhkjdkjhjdujdckhjkdfkdfjkjdfdfdd'];
		
		include 'plug.php';
			
		$res=$bdd->prepare('UPDATE codeneosurf_commande SET bold=:bold WHERE id=:id');
		$res->execute(array(
		':bold'=>'',
		':id'=>$idb
		));
	}
	?>
    <?php 
	
		include 'inc/top.php'; 
		
		if(isset($_SESSION['emails'])){
			
		}else{
			header('location:codeneosurf_connexion.php');
		}
	?>
    <div class="sep"></div>
	<?php  include 'inc/commande_wait.php'; ?>
	<div class="title" style="padding-top:40px;">
        <h1>Espace client</h1> <br />
		<span style="padding:20px;">Espace de reception de code et des commande en cours</span>
    </div>
	<div class="panel" style="background:white; padding-top:30px;">
        <div class="panel_in" style="background:white;">
            <div class="right">
				<div class="pad">
					<strong>Vos codes</strong>
					<div class="scrollit">
						<table> 
							<?php 
							include 'plug.php';
							
							$res=$bdd->prepare('SELECT * FROM codeneosurf_commande WHERE id_id=:id_id AND stat=:stat ORDER BY ID DESC');
							$res->execute(array(':id_id'=>$id_id,':stat'=>'valid'));
							while($show =$res->fetch()){
		echo '<tr> <td style="background:#fbfef3;"><b style="color:#81b80e; font-size:17px;">'.$show['codo'].'</b></td> <td><b>'.$show['codeneo'].'&euro;</b></td>  <td><span>'.$show['datee'].'</span></td> <td style="width:14px;"> <img src="ico/del.png" class="delacomm" id="'.$show['id'].'" style="width:10px;" /> </td> </tr>';
							}
							?>
						</table>
					</div>
				</div>
			</div>
			<div class="right"> 
				<div class="pad">
					<strong>Commande en cours </strong>
					<div class="scrollit">
						<table> 
							<?php 
							include 'plug.php';
							
							$res=$bdd->prepare('SELECT * FROM codeneosurf_commande WHERE id_id=:id_id AND stat=:stat ORDER BY ID DESC');
							$res->execute(array(':id_id'=>$id_id,':stat'=>'wait'));
							while($show =$res->fetch()){
		echo '<tr> <td style="background:#fbfef3;"><b style="color:#81b80e; font-size:17px;">'.$show['codeneo'].'&euro;</b></td> <td><span>'.$show['datee'].'</span></td> </tr>';
							}
							?>
						</table>
					</div>
				</div>
			</div>
        </div>
    </div>
	<div class="title">
        <h1>Cartes Neosurf disponlibles</h1> 
    </div>
	<?php  include 'inc/code_line.php'; ?>
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>