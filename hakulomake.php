<!DOCTYPE html>
<!--


1. Toteuta yksinkertainen hakulomake, jolla voi hakea elokuvan nimellä tai nimen osalla.
 Hakutuloksissa näytetään elokuvan nimi, kuvaus, ikäraja ja julkaisuvuosi.
-->

<html>
    <head>
          
        <title>Elokuvahaku</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">    

        <link rel="stylesheet" href="styles.css">
       
        
   <!--     </style>-->
    </head>
    <body>
        <!-- <div><p>Elokuvan haku</p></div> -->
        <form action="db_palvelin.php" method="post">
            <fieldset>
                <legend>Elokuvahaku</legend>
                <!-- <label>Elokuvan nimi</label> -->
                <input name="nimi" placeholder="nimi">
            
                <input type="submit" name="button" value='hae'">
           </fieldset>
        </form>
      
   
    
    </body>
</html>
