<?php

?>

<DOCTYPE html>
    <html>
    <head>
        <title>phpopdracht41</title>
        <style>

        </style>
    </head>
    <body>
    <ul>
        <?php
        $dieren = array("apen","beren","konijnen","vis");
        $sporten = array("handbal","korfbal","hockey","schaatsen");
        shuffle($sporten);
        shuffle($dieren);
        echo "<li> er zijn".count($sporten)."sporten in de array </li>";
        geefArrayWeerAlsLijst($sporten);
        geefArrayWeerAlsLijst($dieren);
       function geefArrayWeerAlsLijst($arr){
           foreach($arr as $arr_element) {
               echo "<li>" . $arr_element."</li>";
           }
       }
        ?>
    </ul>
    </body>
    </html>
</DOCTYPE>
