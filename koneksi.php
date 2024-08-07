<?php 
$koneksi = mysqli_connect("localhost", "root", "", "latihanrpl_crud");
if(!$koneksi) {
    die(mysql_connect_error($koneksi));
}

?>