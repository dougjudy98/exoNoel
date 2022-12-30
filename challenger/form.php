<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création personne et compte bancaire</title>
</head>
<body>

<?php 
    include "./Personne.php";
    include "./CompteBancaire.php";
?>

<form action="./compte.php" method="POST">

    <input type="text" name="nom" id="nom" placeholder="Saisir votre nom" required>
    <input type="text" name="age" id="age" placeholder="Saisir votre age" required>
    <input type="text" name="solde" id="solde" placeholder="Saisir le solde" required>

    <input type="submit" value="Valider">

</form>



    
</body>
</html>



