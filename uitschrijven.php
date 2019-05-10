<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF_8">
    <title>Uitschrijven</title>
    <style>
    input{
        position:absolute;
        left:90px;
    }
        body{
            font-size:20px;
        }
    </style>
</head>
<body>
<h1>Nieuwsbrief</h1>
<h2>Uitschrijven</h2>
<a href="opdracht8.php">Klik hier om terug te gaan naar de homepage</a><br><br>
<form method="POST" action="verwerkuitschrijven.php">
    <label>Email<input type="email" name="email"></label><br>
    <input type="submit" name="submit">
</form>
</body>
</html>