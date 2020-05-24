<?php
// Stockage des infos
$serveur = 'localhost';
$utilisateur = 'root';
$motDePasse = 'root';
$nomBd = '2020_airfraissvp';

//$serveur = 'timunix2';
//$utilisateur = 'avissolu';
//$motDePasse = '0lv8rR5#W(lE3H';
//$nomBd = 'avissolu_airfraissvp';

// Concaténation pour la requête
$chaineDsn = 'mysql:dbname=' . $nomBd . ';host=' . $serveur;

//Tentative de connexion
$pdo = new PDO($chaineDsn, $utilisateur, $motDePasse);

// Changement d'encodage des caractères UTF-8
$pdo->exec("SET CHARACTER SET utf8");

// Affectation des attributs de la connexion : Obtenir des rapports d'erreurs et d'exception avec errorInfo()
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
