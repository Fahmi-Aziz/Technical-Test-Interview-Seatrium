<?php
include '../koneksi.php';

$employee_id = $_POST['employee_id'];
$name = $_POST['name'];
$job_title = $_POST['job_title'];
$email = $_POST['email'];

$cekEmail = mysqli_query($koneksi, "SELECT * FROM employee WHERE email='$email'");
if (mysqli_num_rows($cekEmail) > 0) {
    echo "<script>alert('Email sudah digunakan. Silakan gunakan email lain!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
}

$cekID = mysqli_query($koneksi, "SELECT * FROM employee WHERE employee_id='$employee_id'");
if (mysqli_num_rows($cekID) > 0) {
    echo "<script>alert('Employee ID sudah digunakan. Silakan gunakan Employee ID lain!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
}

$insert = mysqli_query($koneksi, "INSERT INTO employee (employee_id, name, job_title, email) VALUES ('$employee_id', '$name', '$job_title', '$email')");

if ($insert) {
    echo "<script>alert('Data Berhasil Disimpan!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
} else {
    echo "<script>alert('Gagal menambahkan data!');</script>";
    echo mysqli_error($koneksi);
}
?>