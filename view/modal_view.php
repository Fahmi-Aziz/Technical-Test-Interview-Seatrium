<?php
include "./koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM employee");

$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
?>
    <div class="modal fade" id="viewkaryawan<?php echo $data['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Data Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row-lg my-10">
                        <p class="card-text"><b>Employee ID</b> :
                            <?php echo $data['employee_id']; ?>
                        </p>
                        <p class="card-text"><b>Name</b> :
                            <?php echo $data['name']; ?>
                        </p>
                        <p class="card-text"><b>Job Title</b> :
                            <?php echo $data['job_title']; ?>
                        </p>
                        <p class="card-text"><b>Email</b> :
                            <?php echo $data['email']; ?>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>