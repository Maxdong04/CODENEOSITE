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
        <h1>Comment utiliser les codes Neosurf?</h1> <br />
		<center><img src="src/allop.png" style="width:157px;" /></center>
    </div>
	<div class="pax_how"> 
		<span> <b>1</b> <img src="how/all1.png" alt="" /></span>
		<span><b>2</b><img src="how/all2.png" alt="" /></span>
		<span><b>3</b><img src="how/all3.png" alt="" /></span>
		<span><b>4</b><img src="how/all4.png" alt="" /></span>
	</div>
	
	<div class="title" style="padding-top:40px;">
		<center><img src="src/zet.png" style="width:157px;" /></center>
    </div>
	<div class="pax_how"> 
		<span> <b>1</b> <img src="how/ze1.png" alt="" /></span>
		<span><b>2</b><img src="how/ze2.png" alt="" /></span>
		<span><b>3</b><img src="how/ze3.png" alt="" /></span>
	</div>
	
	<?php include 'inc/marche_sur.php'; ?>
	
	<?php include 'inc/foot.php'; ?>
	
	<?php include 'inc/js_motor.php'; ?>
	
</body>
</html>