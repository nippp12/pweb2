<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php 
    $x="Selamat belajar PHP!";
    $date="20-12-2023";
    // echo $x;
    echo strtoupper($x) . "<br>";
    echo strtolower($x) . "<br>";
    echo substr($x, 0, 10) . "<br>";
    ?>
</body>
</html>