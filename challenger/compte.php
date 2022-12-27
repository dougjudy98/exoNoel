<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Bancaire</title>
</head>
<body>

<?php

include "./Personne.php";
include "./CompteBancaire.php";

// Traitement formulaire création

if(isset($_POST['nom'], $_POST['age'], $_POST['solde']) && !empty($_POST['nom']) && !empty($_POST['age']) && !empty($_POST['solde'])){
    
    $client = new Personne($_POST['nom'], $_POST['age']);
    $compteBancaireClient = new CompteBancaire($_POST['solde']);
    $client->compteBancaire = $compteBancaireClient;

    var_dump($client);
    var_dump($compteBancaireClient);

    echo $client->afficherInfos();
}

?>

<!-- Formulaire de modifications -->
<form action="" method="POST">
    <label for="depot">Déposer de l'argent</label>
    <input type="text" name="montant" id="depot" placeholder="Saisir le montant" required>
    <input type="submit" value="Déposer">
</form>

<?php 

// if(isset($_POST['montant']) && !empty($_POST['montant'])){
//     $client->compteBancaire->deposer($_POST['montant']);
// } 


?>
    
</body>
</html>