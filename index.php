<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 >Kalkulator Sederhana</h1>
<div class="box">
    <form action="webKalkulator.php" method="post">
        <h4>Angka Pertama :</h4>
        <input type="number" name="a" placeholder="Angka Pertama">    
        <h4>Angka Kedua :</h4>
        <input type="number" name="b" placeholder="Angka Kedua">
        <h4>Pilihan Menu :</h4>
        <div class="btn">
        <input type="submit" name="jumlah" value="+">
        <input type="submit" name="kurang" value="-">
        <input type="submit" name="kali" value="*">
        <input type="submit" name="bagi" value="/">
        </div>
    </form>
<hr>
<h4>Hasil Hitung :</h4>
    <?php
    
    if(isset($_POST["jumlah"]) || isset( $_POST["kurang"]) || isset($_POST["kali"]) || isset($_POST['bagi'])) {
        error_reporting(E_ALL ^ E_NOTICE);
        $a = $_POST['a'];
        $b = $_POST['b'];

        if(isset($_POST["jumlah"])){
            $hasil = $a + $b;
            echo "Nilai A adalah $a</br>";
            echo "Nilai B adalah $b</br>";
            echo "Hasil Dari penjumlahan adalah : $hasil";
        }
        // tambahkan kondisi untuk operasi matematika lainnya di sini
        if(isset($_POST["kurang"])){
            $hasil = $a - $b;
            echo "Nilai A adalah $a </br>";
            echo "Nilai B adalah $b </br>";
            echo "Hasil Dari pengurangan adalah : $hasil";
        }
        if(isset($_POST["kali"])){
            $hasil = $a * $b;
            echo "Nilai A adalah $a </br>";
            echo "Nilai B adalah $b </br>";
            echo "Hasil Dari perkalian adalah : $hasil";
        }
        if(isset($_POST["bagi"])){
            $hasil = $a / $b;
            echo "Nilai A adalah $a </br>";
            echo "Nilai B adalah $b </br>";
            echo "Hasil Dari pembagian adalah : $hasil";
        }
    }
    ?>
 
    </div>
</body>
<style>
    body{
        background-color: rgb(127, 195, 172);
    }
    h1{
        text-align: center;
    }
    .box{
        background-color: rgb(18, 228, 102);
       margin: 0% 20%;
       padding: 1% 10%;
       box-shadow: 2px 3px 5px #747373; 
       border-radius: 2%;
    }
    .btn input{
        background-color: rgb(255, 0, 0);
        margin-right: 5%;
        padding: 2% 7%;
        transition: 0.5s;
        cursor: pointer;
    }
    .btn input:hover{
        transform: scale(80%);
    }

</style>
</html>
