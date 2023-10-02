<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brancing</title>
</head>
<body>
    <form method="post">
      <input type='text' name="angka" id="x" placeholder="Masukan angka">
      <input type='submit' value="cek angka">
    </form>
    <?php 
    if (isset ($_POST['angka'])){
        $x = $_POST['angka'];
        echo "Nilai x= $x <br>";
        if ($x > 0){
            echo "$x Bilangan Positif";
        }
        elseif ($x < 0){
            echo "$x Bilangan Negatif";
        }
        else{
            echo "$x Bilangan Nol";
        }
    }
    ?>
</body>
</html>