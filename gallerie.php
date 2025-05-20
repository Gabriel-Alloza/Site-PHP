<?php
    $titre = "Gallerie";
    $navbar = "<p><a href = 'home.php'>Accueil</a>Gallerie<a href = 'contact.php'>Contact</a></p>";
    $texte_entete = "Bienvenue dans la gallerie!";
    include 'header.php';
?>

<div class="container">
    <div class = "row">
        <div class = "col-sm-4">
            <img src = "Images/imm1.jpg" alt = "Andor 1" width="300" height="600">
        </div>


        <div class = "col-sm-4">
            <img src = "Images/imm2.webp" alt = "Andor 2"  width="400" height="200">
        </div>

        <div class = "col-sm-4">
            <img src = "Images/imm3.webp" alt = "Andor 3" width="300" height="600">
        </div>

    </div>
</div>


<?php include 'footer.php'; ?>