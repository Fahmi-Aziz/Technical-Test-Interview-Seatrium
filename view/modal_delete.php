<?php
include "./koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM employee");

$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
?>

    <div class="example-modal">
        <div class="modal fade" id="deletekaryawan<?php echo $data['user_id']; ?>" role="dialog" style="display:none;">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Konfirmasi Hapus data Karyawan</h3>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus karyawan atas nama:
                            <b><?php echo $data['name']; ?>?</b>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                        <a href="./model_controller/hapus_data.php?user_id=<?php echo $data['user_id']; ?>" class="btn btn-primary">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>