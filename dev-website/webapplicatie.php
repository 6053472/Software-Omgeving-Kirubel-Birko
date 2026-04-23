<?php

if(isset($_POST['submit'])){
    $voornaam = $_POST('voornaam');
    $voornaam = $_POST('tussenvoegsel');
    $voornaam = $_POST('achternaam');
    $voornaam = $_POST('geboortedatum');
    $voornaam = $_POST('straatnaam');
    $voornaam = $_POST('huisnummer');
}

?>



<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Kirubel Birko">
    <meta tags="formulier, nieuwbrief">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulier</title>
</head>
<body>

<articel>
    <h1>Aanvraag formulier<h1>
</articel>

<form action="webapplicatie.php" method="post">

<section class="Voornaam">
    <input type="text" name="voornaam" placeholder="voornaam" required>
</section>


<section class="Tussenvoegsel">
    <input type="text" name="tussenvoegsel" placeholder="tussenvoegsel" required>
</section>


<section class="Achternaam">
    <input type="text" name="Achternaam" placeholder="achternaam" required>
</section>


<section class="Geboortedatum">
    <input type="date" name="geboortedatum" required>
</section>


<section class="Straatnaam">
    <input type="text" name="straatnaam" placeholder="straatnaam" required>
</section>


<section class="Huisnummer">
    <input type="number" name="huisnummer" placeholder="huisnummer" required>
</section>


<section class="Postcode">
    <input type="text" name="postcode" placeholder="postcode" required>
</section>







</form>

    
</body>
</html>