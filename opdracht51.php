<?php
print_r($_POST);

if($_POST['name']==""){
    echo "je moet nog een naam invullen";
    echo "<a href=\"opdracht51.html\">Terug naar formulier</a>";
};

if($_POST['adress']==""){
    echo "je moet nog een adress invullen";
    echo "<a href=\"opdracht51.html\">Terug naar formulier</a>";
};

if($_POST['email']==""){
    echo "je moet nog een email invullen";
    echo "<a href=\"opdracht51.html\">Terug naar formulier</a>";
};

if($_POST['gender']==""){
    echo "je moet een gender kiezen";
    echo "<a href=\"opdracht51.html\">Terug naar formulier</a>";
};

if($_POST['password']==""){
    echo "je moet nog een password invullen";
    echo "<a href=\"opdracht51.html\">Terug naar formulier</a>";
};
