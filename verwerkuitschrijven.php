<?php
$email = $_POST['email'];

$dbc = mysqli_connect('localhost','root','root','inschrijven') or die ('Error connecting');
$query = "SELECT * FROM nieuwsbrief_tutorial WHERE email = '$email'";
$result = mysqli_query($dbc,$query) or die ('Error querying');
$number_of_rows = mysqli_num_rows($result);
if($number_of_rows ==0){
    echo $email.' bestaat niet in de database<br>';
    echo '<a href="opdracht8.php">Klik hier om nog een keer te proberen</a><br><br>';
    exit();
} else {
    echo $email.' is zo veel keer gevonden in de database: '.$number_of_rows;
}
$query = "DELETE FROM nieuwsbrief_tutorial WHERE email = '$email'";
$result = mysqli_query($dbc,$query) or die ('Error querying DELETE');
echo 'het '.$email.' is verwijderd uit de database';
echo '<a href="opdracht8.php">Klik hier om nog een keer te proberen</a><br><br>';
