<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>php opdrachten</title>
    <style>
    body{
        text-align:center;
    }
    .red{
        border:red solid 5px;
    }
    .green{
        border:green solid 5px;
    }
    </style>
</head>
<body>
<?php
    for($i = 1; $i<=9; $i++){
        if($i % 2 ==0) {
            $class = "class='red'";
        } else {
            $class = "class='green'";
        }
        echo "<img ".$class." src='imgg/aap".$i.".jpg'>";
    }
?>

</body>
</html>
