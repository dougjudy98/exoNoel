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

session_start();

if(isset($_POST['nom'], $_POST['age'], $_POST['solde']) && !empty($_POST['nom']) && !empty($_POST['age']) && !empty($_POST['solde'])){
    
    //////// afficher sans session
    // $client = new Personne($_POST['nom'], $_POST['age']);
    // $compteBancaireClient = new CompteBancaire($_POST['solde']);
        // var_dump($client);
    // var_dump($compteBancaireClient);
    
    // echo $client->afficherInfos();


    $_SESSION['client'] = new Personne($_POST['nom'], $_POST['age'], new CompteBancaire($_POST['solde']));
    
    ///// session compte séparée
    // $_SESSION['compte'] = new CompteBancaire($_POST['solde']);
    // $_SESSION['client']->compteBancaire = $_SESSION['compte'];


    var_dump($_SESSION);


}

?>

<!-- Formulaire de modifications -->
<form action="" method="POST">
    <label for="depot">Déposer de l'argent</label>
    <input type="text" name="montant_depot" id="depot" placeholder="Saisir le montant">
    <input type="submit" value="Déposer">
    <label for="depot">Retirer de l'argent</label>
    <input type="text" name="montant_retrait" id="retrait" placeholder="Saisir le montant">
    <input type="submit" value="Retirer">
</form>

<?php 

if(isset($_POST['montant_depot']) && !empty($_POST['montant_depot'])){
    $_SESSION['client']->compteBancaire->deposer($_POST['montant_depot']);
} 
elseif(isset($_POST['montant_retrait']) && !empty($_POST['montant_retrait'])){
    $_SESSION['client']->compteBancaire->retirer($_POST['montant_retrait']);
}

echo $_SESSION['client']->afficherInfos();


?>
    
</body>
</html>
