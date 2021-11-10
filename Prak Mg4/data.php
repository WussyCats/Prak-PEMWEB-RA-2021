<?php include "connection.php"; ?>

<table width="700" border="2">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
    </tr>

<?php $sql=$conn->query("select * from mahasiswa");
while ($rs=$sql->fetch_object()) { ?>
    <tr>
        <th> <?php echo $rs->nim; ?> </th>
        <th> <?php echo $rs->nama; ?> </th>
        <th> <?php echo $rs->prodi; ?> </th>
        <th> <?php echo $rs->angkatan; ?> </th>
        <th> <button type="button" href="javascript:void()" onclick="edit('<?php echo $rs->nim; ?>')"> Edit </button></th>
        <th> <button type="button" href="javascript:void()" onclick="hapus('<?php echo $rs->nim; ?>')"> Delete </button></th>
    </tr>
<?php } ?>
</table>

<script> 
    function edit(nim) {
        $.get("input_data.php", {nim:nim}, function(data) {
            $("#content").html(data);
        } );
    }
    function hapus(nim) {
        $.get("delete_data.php", {nim:nim}, function(data) {
            lihat();
        } );
    }
</script>

<footer>
    <center> 
        <b style="font-size: 15px;">
        Created by Muhammad Faris Zatwara Putra Unyi | 119140201
        </b>
    </center>
</footer>