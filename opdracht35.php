<?php
$age = 66;
$bedrag = 10;
if($age > 65){
    echo $bedrag = $bedrag * 0.5;
}
if($age <= 12){
    echo $bedrag = 5;
}
if($age < 3){
    echo "gratis";
}
else{
   echo $bedrag;
}
