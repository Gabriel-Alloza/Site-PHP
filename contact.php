<?php session_start(); 

if($_SERVER["REQUEST_METHOD"]==="POST"){
        $is_valid = true;
        $valid_msg = true;
        $valid_mail = true;
        $valid_reason = true;
        $valid_nom_prenom = true;
        $method_post = true;

        $_SESSION['nom'] = $_POST["nom"] ?? '';
        $_SESSION['prénom'] = $_POST["prénom"] ?? '';
        $_SESSION['email'] = $_POST["email"] ?? '';
        $_SESSION['message'] = $_POST["message"] ?? '';
        $_SESSION['raison_contact'] = $_POST["raison_contact"] ?? '';

        $message = $_POST['message'];
        $nb_char = strlen($message);
        if($nb_char<5){
            $is_valid = false;
            $valid_msg = false;

        }
        

        $email = $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $is_valid = false;
            $valid_mail = false;
        }
        

        $reason = $_POST["raison_contact"];
        if(!isset($reason)){
            $is_valid = false;
            $valid_reason = false;
        }
        

        $nom = $_POST["nom"];
        $prenom = $_POST["prénom"];

        if(empty($nom) || empty($prenom)){
            $is_valid = false;
            $valid_nom_prenom = false;
        }

        if($is_valid){
            $results = "Nom: $nom\nPrénom: $prenom\n E-mail: $email\n Raison: $reason\n Message: $message";
            file_put_contents("resultats.txt", $results);
            session_unset();
        }

    }
?>

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
    Nom: <input type = "text" name = "nom" value = "<?php echo $_SESSION['nom'] ?? ''; ?>">
    <br>
    <br>
    Prénom: <input type = "text" name = "prénom" value = "<?php echo $_SESSION['prénom'] ?? ''; ?>">
    <?php if(!$valid_nom_prenom && $method_post){
        echo "<br>Veuillez entrer votre nom et prénom";
    }
    ?>
    <br>
    <br>
    email: <input type = "text" name = "email" value = "<?php echo $_SESSION['email'] ?? ''; ?>">
    <?php   if(!$valid_mail && $method_post){
        echo "<br>mail invalide<br>";
    }
    ?>
    <br>
    <br>
    Raison du contact: 
    <br>
    <input type = "radio" name = "raison_contact" value = "A" <?php if (($_SESSION['raison_contact'] ?? '') == 'A') echo 'checked'; ?>>
    <label>A</label>
    <br>
    <br>
    <input type = "radio" name = "raison_contact" value = "B" <?php if (($_SESSION['raison_contact'] ?? '') == 'B') echo 'checked'; ?>>
    <label>B</label>
    <br>
    <br>
    <input type = "radio" name = "raison_contact" value = "C" <?php if (($_SESSION['raison_contact'] ?? '') == 'C') echo 'checked'; ?>>
    <label>C</label>
    <?php if(!$valid_reason && $method_post){
        echo "<br>Veuillez choisir une raison <br>";
    }
    ?>
    <br>
    <br>
    Message: <textarea name = "message"><?php echo $_SESSION['message'] ?? ''; ?></textarea>
    <?php if(!$valid_msg && $method_post){
        echo "<br>Message invalide<br>";
    }
    ?>
    <br>
    <br>
    <input type = "submit" value = "Envoyer">


</form>

<?php include 'footer.php'; ?>