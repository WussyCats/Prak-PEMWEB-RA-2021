<?php

$num1 = $_POST['number1'];
$num2 = $_POST['number2'];


function bilangan_prima($num1, $num2){
    for($i=$num1; $i<=$num2; $i++){
        $sorting = true;
        
        if($i == 2){
            echo "$i ";

        }else if ($i != 1){
            $limit = ($i-1);
    
            for($j=2; $j<$limit; $j++){
                if($i%$j == 0){
                    $sorting = false;
                    break;
                }
            }
            if($sorting == true){
                echo "$i ";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <style>
        body {
            background-color: salmon;
        }
    
        p {
            font-size: 20px;
            color: darkgreen;

        }
    </style>

    <body>
        <form action="Tugas-3.php" method="POST">
            <input type="angka" name="number1" placeholder="Bilangan 1..."><br>
            <br>
            <input type="angka" name="number2" placeholder="Bilangan 2..."><br>
            <br>
            <input type="submit" name="submit">
        </form>
    
        <div>
            <p> Bilangan prima dari <?php echo $num1 ?> - <?php echo $num2 ?> adalah <?php echo bilangan_prima($num1, $num2); ?> </p>
        </div>

        <br> 
        <b> *Noted : Warning akan hilang saat user telah menginput bilangan </b>
    </body>

    <footer>
        <h3>119140201 - Muhammad Farisi Zatwara Putra Unyi </h3>
    </footer>
</html>