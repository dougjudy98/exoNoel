<?php 


$host = 'localhost'; 
$dbname = 'banques'; 
$user = 'root'; 
$mdp = ''; 
$char = 'utf8'; 



try { 
    $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset='.$char, $user, $mdp); // infos de connexion à la base de données, utilisateur, mot de passe
} catch(PDOException $e){
    echo "ERREUR :  ".$e->getMessage(); 
    die; 
}





?>