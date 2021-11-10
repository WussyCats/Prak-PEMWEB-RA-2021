<script src="jquery-3.6.0.min.js"></script>

<button type="button" href="javascript:void()" onclick="tambah()"> Tambah Data</button>
<button  type="button" href="javascript:void()" onclick="lihat()"> Lihat data </button>
<br><br>
<div id="content"></div>
<script> 
    function tambah() {
        $.get("input_data.php", function(data) {
            $("#content").html(data);
        } );
    }
    function lihat() {
        $.get("data.php", function(data) {
            $("#content").html(data);
        } );
    }
</script>

