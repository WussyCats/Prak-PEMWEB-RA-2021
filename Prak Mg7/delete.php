<?php 
include 'connection.php';

$id = $_POST['adv_level'];
$sql = mysqli_query($conn,"DELETE FROM adventure WHERE adv_level = '$id' ");
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>