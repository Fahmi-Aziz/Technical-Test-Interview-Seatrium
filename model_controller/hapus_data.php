<?php
// include database connection file
include '../koneksi.php';

$user_id = $_GET['user_id'];
$result = mysqli_query($koneksi, "DELETE FROM employee WHERE user_id='$user_id'");

echo "<script>alert('Employee berhasil dihapus!');</script>";
echo "<script>window.location.href = '../index.php';</script>";
exit();
