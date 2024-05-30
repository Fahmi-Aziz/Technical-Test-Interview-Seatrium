<?php
include '../koneksi.php';

$user_id = $_GET['user_id'];
$employee_id = $_POST['employee_id'];
$name = $_POST['name'];
$job_title = $_POST['job_title'];
$email = $_POST['email'];

$cekEmail = mysqli_query($koneksi, "SELECT * FROM employee WHERE email='$email' AND user_id !='$user_id'");
if (mysqli_num_rows($cekEmail) > 0) {
    echo "<script>alert('Email sudah digunakan. Silakan gunakan email lain!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
}

$cekID = mysqli_query($koneksi, "SELECT * FROM employee WHERE employee_id='$employee_id' AND user_id != '$user_id'");
if (mysqli_num_rows($cekID) > 0) {
    echo "<script>alert('Employee ID sudah digunakan. Silakan gunakan Employee ID lain!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
}

$updateEmployee = mysqli_query($koneksi, "UPDATE employee SET employee_id='$employee_id', name='$name', job_title='$job_title', email='$email' WHERE user_id='$user_id'") or die(mysqli_error($koneksi));
if ($updateEmployee) {
    echo "<script>alert('Data berhasil diubah!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
} else {
    echo "<script>alert('Data gagal diubah!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
}
