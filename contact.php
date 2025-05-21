<?php
    $titre = "Contact";
    $navbar = "<p><a href = 'home.php'>Accueil</a><a href = 'gallerie.php'>Gallerie</a>Contact</p>";
    $texte_entete = "Contactez-nous!";
    include 'header.php';
?>

<form>
    <select>
        <option>Homme</option>
        <option>Femme</option>
    </select>
    <br>
    <br>
    Nom: <input type = "text">
    <br>
    <br>
    Prénom: <input type = "text">
    <br>
    <br>
    email: <input type = "text">
    <br>
    <br>
    Raison du contact: <input type = "radio">
    <label>A</label>
    <br>
    <br>
    <input type = "radio">
    <label>B</label>
    <br>
    <br>
    <input type = "radio">
    <label>C</label>
    <br>
    <br>
    Message: <textarea></textarea>

</form>


<?php include 'footer.php'; ?>