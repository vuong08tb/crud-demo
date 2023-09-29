<?php

$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];
$id = $_POST['sid'];

require_once 'ketnoi.php';

$updatesql = "UPDATE sinhvien SET masv='$masv', hoten= '$ht', lop='$lop' WHERE id=$id";

if (mysqli_query($conn, $updatesql)){

header("Location: lietke.php");
}

