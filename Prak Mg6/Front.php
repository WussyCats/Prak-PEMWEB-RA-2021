<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <title> Prak Mg 6</title>

        <style>
        body {
            background-color: salmon;
            color: darkblue;
        }

        p {
            font-size: 25px;
        }

        b {
            font-size: 20px;
        }

        input[type=submit] {
            width: 10em;  
            height: 2em;
            font-size: 17px;
        }

        input[type=number] {
            width: 10em;  
            height: 2em;
            font-size: 17px;
        }

        input[type=text] {
            width: 10em;  
            height: 2em;
            font-size: 17px;
        }
    </style>

</head>

<body>
    <center> <h1> SELAMAT DATANG di TOKO BUAH ITERA  </h1> </center>

    <center>
        <P> =================================================== </p>
        <p>DAFTAR BUAH YANG TERSEDIA</p>
        <p>Jambu: Rp. 13.000/Kg</p>
        <p>Mangga: Rp. 15.000/Kg </p>
        <p>Salak: Rp. 10.000/Kg </p>
        <P> =================================================== </p>
        
        <div>
            <p> Silahkan Isi Form Belanjaan</p>
            <form method="POST" action="Back.php"  id="buah" name="buah" enctype="multipart/form">
                <table>
                    <tr>
                        <td><p><label for="">Jambu : </label></P></td>
                        <td><input type="number" id="jambu" placeholder="Jumlah jambu..." onchange="setValue()" name="jambu"> <br></td>
                    </tr>    
                    <tr>  
                        <td><p><label for="">Mangga : </label></p></td>
                        <td><input type="number" id="mangga" placeholder="Jumlah mangga..." onchange="setValue()" name="mangga"> <br></td>
                    </tr> 
                        <td><p><label for="">Salak : </label></p></td>  
                        <td><input type="number" id="salak" placeholder="Jumlah salak..." onchange="setValue()" name="salak"> <br></td> 
                    <tr>    
                        <td><p><label for="">Total Harga : </label></p></td>
                        <td><input type="text" id="total" placeholder="Total harga..." name="total" readonly> <br></td>
                    </tr>
                        <td><input type="submit" value="Submit"></td>
                </table>
            </form>
            <b><br>note : form harus diisi, jika buah tidak ingin dibeli silahkan masukan angka "0"</b>

            <P> =================================================== </p>
            <p> Total Harga Belanjaan: </p>

        </div>


    <center>   
</body>

<script>
    function setValue(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
</script>

</html>