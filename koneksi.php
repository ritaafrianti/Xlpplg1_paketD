<?php 

$koneksi = mysqli_connect('localhost','root','','absensi_db');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}