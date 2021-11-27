<?php 
include 'connection.php';

$id = $_POST['id'];
$adv_name = $_POST['adv_name'];
$adv_level = $_POST['adv_level'];
$adv_job = $_POST['adv_job'];
$adv_guild_rank = $_POST['adv_guild_rank'];

if (!($adv_name=='' || $adv_level=='' || $adv_job=='' || $adv_guild_rank=='')) {
	$sql = mysqli_query($conn,"UPDATE adventure SET adv_name ='$adv_name', adv_level ='$adv_level', adv_job ='$adv_job', adv_guild_rank ='$adv_guild_rank' WHERE adv_level = '$id' ");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Ubah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Ubah Data";
}
echo json_encode($result);


?>