<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantime</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="php">
    <?php 
        $km = $_POST['km'];
        $speed = $_POST['speed'];

        if ($km == null || $speed == null) {
            echo "Vous n'avez renseigné aucune valeure !";
        }

        $result = ($km*1)/$speed;
 
        if ($result <= 60) {
            echo round($result, 2);
            echo "s";
        }
        else {
            $min  = 0;
            $s = 0;
            $result /= 60;
            $min = round($result, 0);
            $s = substr($result, -2);
            $s *= 60;
            echo "$min min $s s";
        }
    ?>
</body>
</html>