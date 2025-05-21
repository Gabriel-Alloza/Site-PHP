<?php
    $titre = "Contact";
    $navbar = "<p><a href = 'home.php'>Accueil</a><a href = 'gallerie.php'>Gallerie</a>Contact</p>";
    $texte_entete = "Contactez-nous!";
    include 'header.php';
?>

<form action = "contact.php" mehod = "post">
    <select>
        <option>Homme</option>
        <option>Femme</option>
    </select>
    <br>
    <br>
    Nom: <input type = "text" name = "nom">
    <br>
    <br>
    Prénom: <input type = "text" name = "prénom">
    <br>
    <br>
    email: <input type = "text" name = "email">
    <br>
    <br>
    Raison du contact: 
    <br>
    <input type = "radio" name = "raison_contact">
    <label>A</label>
    <br>
    <br>
    <input type = "radio" name = "raison_contact">
    <label>B</label>
    <br>
    <br>
    <input type = "radio" name = "raison_contact">
    <label>C</label>
    <br>
    <br>
    Message: <textarea name = "message"></textarea>
    <br>
    <br>
    <input type = "submit" value = "Envoyer">


</form>

<?php
    echo $_POST["message"];
 ?>


<?php include 'footer.php'; ?>