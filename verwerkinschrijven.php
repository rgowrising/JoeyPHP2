<?php
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$dbc = mysqli_connect('localhost','root','root','inschrijven') or die ('Error connect.');
$result = "INSERT INTO nieuwsbrief_tutorial VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$email')";
$result = mysqli_query($dbc,$result) or die ('Error querying.');
mysqli_close($dbc);
if($result){
    echo "De gegevens zijn toegevoegd aan de database: <br>";
    echo $voornaam .'<br>';
    echo $tussenvoegsel .'<br>';
    echo $achternaam . '<br>';
    echo $email . '<br>';
} else {
    echo "Er is iets mis gegeaan probeer opnieuw";
}
