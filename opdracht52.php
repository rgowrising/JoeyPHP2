<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selectbox</title>
</head>
<body>
<?php
//print_r($_POST['apen']);
foreach($_POST['apen'] as $aap){
    echo "<img src='imgg/".$aap.".jpg'>";
}
?>
<form method="POST">
    <select name="apen[]" multiple>
        <option value="aap1">Klaus de aap</option>
        <option value="aap3">Cloris de aap</option>
        <option value="aap4">Truus de aap</option>
        <option value="aap9">De aap</option>
        <option value="aap6">De laatste aap</option>
    </select>
    <input type="submit" name="knop">
</form>
</body>
</html>