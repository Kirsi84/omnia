<!DOCTYPE html>
<!--


1. Toteuta yksinkertainen hakulomake, jolla voi hakea elokuvan nimellä tai nimen osalla.
 Hakutuloksissa näytetään elokuvan nimi, kuvaus, ikäraja ja julkaisuvuosi.
-->

<html>
    <head>
          
        <title>Elokuvat</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">    

        <link rel="stylesheet" href="styles.css">
               
       
    </head>



<?php

    
    $palvelin   = "localhost";
    $kayttaja   = "root";  // tämä on tietokannan käyttäjä, ei tekemäsi järjestelmän
    $salasana   = "";
    $tietokanta = "sakila";
  
    $nimi        = trim(strip_tags( $_POST['nimi'] ) );
    $nimi        = strtoupper($nimi );

   
    $yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);
    if ($yhteys->connect_error) {
        die("Yhteyden muodostaminen epäonnistui: ".$yhteys->connect_error)."<br>";
    }
   
    $query = "SELECT f.title, f.description, f.release_year, f.rating FROM film f " .
    " WHERE UPPER(f.title) LIKE '%$nimi%' ORDER BY title";


    $tulos = $yhteys->query($query);
    if (!$tulos) {
        echo "Virhe: $query<br>".$yhteys->error;
    }
    echo "<ul>";  
    while($rivi = $tulos->fetch_assoc()){
        $title = $rivi['title'];
        $description = $rivi["description"];
        $release_year = $rivi["release_year"];
        $rating = $rivi["rating"];
            
        echo "<li><span>$title</span><span>$description</span><span>$release_year</span><span>$rating</span></li>";
    }        
    echo "</ul>";  
?>
<form method="post" action="hakulomake.php">
 <input type="submit" value="Takaisin">    
</form>    

