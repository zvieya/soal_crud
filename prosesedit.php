<?php
include 'koneksi.php';
$nama = $_POST ["nama"];
$umur = $_POST ["umur"];

$sql ="update siswa set umur='$umur', nama='$nama'";
$query = mysqli_query($koneksi, $sql);


header("location: index.php");

?>