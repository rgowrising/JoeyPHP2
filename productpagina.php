<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productpagina</title>
    <style>
    img{
        width:200px;
    }
    #pics1{
        position:absolute;
        left:450px;
        top:300px;
    }
    #pics2{
        position:absolute;
        left:230px;
        top:450px;
    }
    #pics3{
        position:absolute;
        left:450px;
        top:600px;
    }
    #pics4{
        position:absolute;
        left:650px;
        top:500px;
    }
    </style>
</head>
<body>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "root";
$db_name = "voer";

$connection = mysqli_connect($host, $user, $pass, $db_name);

if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}


$result = mysqli_query($connection,"SELECT * FROM hond");
$all_property = array();

echo '<table style="border:solid 1px grey;" class="data-table">
        <tr style="border:solid 1px grey;" class="data-heading">';
while ($property = mysqli_fetch_field($result)) {
    echo '<td style="border:solid 1px grey;">' . $property->name . '</td>';
    array_push($all_property, $property->name);
}
echo '</tr>';

while ($row = mysqli_fetch_array($result)) {
    echo "<tr style='border:solid 1px grey;'>";
    foreach ($all_property as $item) {
        echo '<td style="border:solid 1px grey;">' . $row[$item] . '</td>';
    }
    echo '</tr>';
}
echo "</table>";

?>
<div id="pics1">
<img src="img/natter.jpg">
</div>
<div id="pics2">
<img src="img/droger.jpg">
</div>
<div id="pics3">
<img src="img/vita.jpg">
</div>
<div id="pics4">
    <img src="img/kort.jpg">
</div>
</body>
</html>