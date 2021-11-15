<form action="Tugas-1.php" method="POST">
<input type="angka" name="number1" placeholder="Bilangan 1..."><br>
<br>
<input type="angka" name="number2" placeholder="Bilangan 2..."><br>
<br>
<input type="submit" name="submit">
</form>

<?php
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];

function Tambah($num1, $num2){
    $total1=$num1 + $num2;
    return $total1;
}

function Kurang($num1, $num2){
    $total2=$num1 - $num2;
    return $total2;
}

function Kali($num1, $num2){
    $total3=$num1 * $num2;
    return $total3;
}

function Bagi($num1, $num2){
    $total4=$num1 / $num2;
    return $total4;
}
 
function Mod($num1, $num2){
    $total5=$num1 % $num2;
    return $total5;
}

if (isset($_POST['submit'])) {
    $tot1 = Tambah($num1, $num2);
    $tot2 = Kurang($num1, $num2);
    $tot3 = Kali($num1, $num2);
    $tot4 = Bagi($num1, $num2);
    $tot5 = Mod($num1, $num2);

    echo "<h2>Berikut merupakan hasil dari setiap operasi</h2>";

    echo "<size='18'> PENJUMLAHAN <br>";
    echo "Operator : + <br>";
    echo "Hasil : $tot1";
    echo "<br>";
    
    echo "<br>";
    echo "<size='18'> PENURANGAN <br>";
    echo "Operator : - <br>";
    echo "Hasil : $tot2";
    echo "<br>";

    echo "<br>";
    echo "<size='18'> PERKALIAN <br>";
    echo "Operator : * <br>";
    echo "Hasil : $tot3";
    echo "<br>";

    echo "<br>";
    echo "<size='18'> PEMBAGIAN <br>";
    echo "Operator : / <br>";
    echo "Hasil : $tot4";
    echo "<br>";

    echo "<br>";
    echo "<size='18'> MODULUS <br>";
    echo "Operator : % <br>";
    echo "Hasil : $tot5";
}
?>

<!DOCTYPE html>
<html>
    <style>
        body {
            background-color: salmon;
        }
    </style>

    <body>
        <br> 
        <b> *Noted : Warning akan hilang saat user telah menginput bilangan </b>
    </body>

    <footer> 
        <h3>119140201 - Muhammad Farisi Zatwara Putra Unyi </h3>
    </footer>
</html>