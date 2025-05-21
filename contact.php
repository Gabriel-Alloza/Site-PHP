<?php
    $titre = "Contact";
    $navbar = "<p><a href = 'home.php'>Accueil</a><a href = 'gallerie.php'>Gallerie</a>Contact</p>";
    $texte_entete = "Contactez-nous!";
    include 'header.php';
?>

<form action = "contact.php" method = "post">
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
    <input type = "radio" name = "raison_contact" value = "A">
    <label>A</label>
    <br>
    <br>
    <input type = "radio" name = "raison_contact" value = "B">
    <label>B</label>
    <br>
    <br>
    <input type = "radio" name = "raison_contact" value = "C">
    <label>C</label>
    <br>
    <br>
    Message: <textarea name = "message"></textarea>
    <br>
    <br>
    <input type = "submit" value = "Envoyer">


</form>

<?php
    $nb_char = strlen($_POST['message']);
    if($nb_char>=5){
        echo $_POST['message'];
    }
    else{
        echo "Message invalide";
    }

    $email = $_POST["email"];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo $email;
    }
    else{
        echo "mail invalide";
    }

 ?>


<?php include 'footer.php'; ?>