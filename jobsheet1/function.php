<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
    function persegi_panjang($p,$l){
        return $p * $l;
    }
    function lingkaran($r){
        return 3.14 * $r * $r;
    }
    ?>
    <form method="post">
      <input type='text' name="angka1" id="x" placeholder="Masukan panjang"><br>
      <input type='text' name="angka2" id="x" placeholder="Masukan lebar"><br>
      <input type='text' name="angka3" id="x" placeholder="Masukan jari-jari"><br>
      <input type='submit' value="hitung">
    </form>
    <?php 
    if (isset ($_POST['angka1']) && isset($_POST['angka2'])){
        $x = $_POST['angka1'];
        $y = $_POST['angka2'];
        echo "Nilai panjang= $x <br>";
        echo "Nilai lebar= $y <br>";
        echo "luas persergi panjang= " . persegi_panjang($x,$y) . "<br>";
    }
    if (isset ($_POST['angka3'])){
        $z = $_POST['angka3'];
        echo "Nilai jari-jari= $z <br>";
        echo "luas lingkaran = " . lingkaran($z) . "<br>";
    }
    
    ?>
</body>
</html>