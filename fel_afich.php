<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=festi', 'root', '');
}
catch (Exeption $e){
	die('Erreur : '.$e->getMessage());
}
?>