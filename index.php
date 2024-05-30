<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"> </script>
    <title>Mohammad Fahmi Aziz</title>
    <?php include "./view/template/navbar.php"; ?>
    <?php include "./view/modal_tambah.php"; ?>
    <?php include "./view/modal_edit.php"; ?>
    <?php include "./view/modal_delete.php"; ?>
    <?php include "./view/modal_view.php"; ?>
</head>
<!-- navbar -->
<div class="container-sm d-flex h-100 my-3 justify-content-center align-items-center ">
    <div class="container my-5 ml-auto w-100 bg-white" style="border-radius: 20px;">
        <div class="row">
            <div class="col-md-12 p-5 pt-1">
                <h4><i class="fa-regular fa-address-card mr-2"></i> Daftar Karyawan</h4>
                <hr>
                <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahkaryawan">
                    <i class="fas fa-plus-circle mr-2"></i>Tambah Data Karyawan</a>
                <div class="table-responsive">
                    <?php include "./view/template/table.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>