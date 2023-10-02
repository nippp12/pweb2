<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for($x=2;$x<10;$x+=2)
    echo "$x </br>";
    echo "Perulangan While bilangan ganjil dari 1 hingga 10 </br>";
    $y=1;
    while($y<=10){
    echo "$y </br>";
    $y += 2;
    }
    echo "Perulangan do While bilangan prima dari 1 hingga 20 </br>";
    $z = 1;
    do {
        $pembagi = 2;
        $isPrima = true;
        if ($z <= 1) {
            $isPrima = false;
        }elseif ($z == 2) {
            $isPrima = true;
        } else {
            do {
                if ($z % $pembagi == 0) {
                    $isPrima = false;
                    break;
                }
                $pembagi++;
            } while ($pembagi <= sqrt($z));
        }
        if ($isPrima) {
            echo "$z </br>";
        }
        $z++;
    } while ($z <= 20);
?>

</body>
</html>