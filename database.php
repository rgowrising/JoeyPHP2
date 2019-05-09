<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>database</title>
    <style>

    </style>
</head>
<body>
<?php
$dbc = mysqli_connect('localhost','root','root','mijnschool') or die ('Error connecting.');
$query = "SELECT * FROM klasgenoten";
$result = mysqli_query($dbc,$query) or die ('Error querying.');
while ($row = mysqli_fetch_array($result)){
    echo $row['klasgenoot_id'].'/'.$row['voornaam'].'/'.$row['tussenvoegsel'].'/'.$row['achternaam'].'/'.$row['woonplaats'].'<br>';
}

?>

</body>
</html>