
<?php 
	$lead = 'tsucces';
	try { $bdd = new PDO('mysql:host=localhost;dbname=cneo', 'root', ''); }
	catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
?> 