<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        
    $nota1 = 9.2;
    $nota2 = 7.0;
    $nota3 = 5.0;

    $media = ( $nota1 + $nota2 + $nota3)/3;

    echo "<p>Nota 1: " . $nota1 . "</p>";
    echo "<p>Nota 2: " . $nota2 . "</p>";
    echo "<p>Nota 3: " . $nota3 . "</p>";
    echo "<p>A sua média é: " . round($media,1) . "</p>";

    ?>

</body>

</html>