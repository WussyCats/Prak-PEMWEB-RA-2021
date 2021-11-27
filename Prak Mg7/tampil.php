<?php
include 'connection.php';
$sql = mysqli_query($conn, "SELECT * FROM adventure");
$result = array();
while($fetchData = mysqli_fetch_array($sql)){
	$result[] = $fetchData;
}
echo json_encode($result);

?>