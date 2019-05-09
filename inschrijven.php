<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inschrijven</title>
    <style>
        body{
            font-size:20px;
        }
    input{
        position:absolute;
        left:300px;
    }

    </style>
</head>
<body>
<h1>Nieuwsbrief</h1>
<h2>Inschrijven</h2>
<a href="opdracht8.php">Klik hier om terug te keren naar de home pagina</a><br><br>
<form method="POST" action="verwerkinschrijven.php">
    <label>Voornaam <input type="text" name="voornaam"></label><br>
    <label>Tussenvoegsel <input type="text" name="tussenvoegsel"></label><br>
    <label>Achternaam <input type="text" name="achternaam"></label><br>
    <label>Email <input type="email" name="email"</label><br><br>
    <input type="submit" name="submit">
</form>

</body>
</html>