<?php 
include 'connection.php';

$adv_name = $_POST['adv_name'];
$adv_level = $_POST['adv_level'];
$adv_job = $_POST['adv_job'];
$adv_guild_rank = $_POST['adv_guild_rank'];

if(!($adv_name=='' || $adv_level=='' || $adv_job=='' || $adv_guild_rank=='')){
	$sql = mysqli_query($conn,"INSERT INTO adventure VALUES('$adv_name','$adv_level','$adv_job','$adv_guild_rank')");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>