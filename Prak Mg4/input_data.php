<?php include "connection.php";

if(isset($_GET['nim'])) {
    $nim=$_GET['nim'];
} else {
    $nim=" ";
}

$nama       =" ";
$prodi      =" ";
$angkatan   =" ";

$sql=$conn->query("select * from mahasiswa where nim='".$nim."'");
while ($rs=$sql->fetch_object()) {
    $nama       =$rs->nama;
    $prodi      =$rs->prodi;
    $angkatan   =$rs->angkatan;
}

?>
<fieldset>
    <form onsubmit="save(); return false;" id="content_input">
    NIM         <input type="text" name="nim"       value="<?php echo $nim; ?>"><br>
    Nama        <input type="text" name="nama"      value="<?php echo $nama; ?>"><br>
    Prodi       <input type="text" name="prodi"     value="<?php echo $prodi; ?>"><br>
    Angkatan    <input type="text" name="angkatan"  value="<?php echo $angkatan; ?>"><br>
    <input type="submit" value="Simpan">
    </form>
</fieldset>

<footer>
    <center> 
        <b style="font-size: 15px;">
        Created by Muhammad Faris Zatwara Putra Unyi | 119140201
        </b>
    </center>
</footer>

<script> 
    function save() {
        $.ajax ({
            type    : "POST",
            url     : "save_data.php",
            data    : $("#content_input"). serialize(),
            success : function(data) {
                lihat();
                //
            },
            error: function() {
                alert('error');
            }
        }
    );
}
</script>