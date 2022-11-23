<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
</head>
<body>
    <?php
        define ("phi", 3.14);
        define ("r", 6);

        $keliling = 2 * phi * r;
        
        echo "phi = " . phi . "<br>";
        echo "r = " . r . "<br>";
        echo "Keliling Lingkaran = 2 x phi x r <br>";
        echo "Keliling Lingkaran = 2 x " . phi . "x " . r. "<br>";
        echo "Keliling Lingkaran = $keliling";
    ?>
</body>
</html>