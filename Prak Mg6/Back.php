<?php include "Front.php"; ?>

<?php

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];

class harga_buah
{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->totalMangga = $this->mangga * 15000;}
    public function getJambu(){
        $this->totalJambu = $this->jambu * 13000;}
    public function getSalak(){
        $this->totalSalak = $this->salak * 10000;}

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
       
        echo "<p>Harga Total Belanjaan = Rp.$total </p>";
        echo "<p>Terima kasih Telah Berbelanja</p>";
        echo "<P> =================================================== </p>";
    }
}

$transaksi = new harga_buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();

?>
