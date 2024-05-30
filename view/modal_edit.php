<?php
include "./koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM employee");

$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
?>
<div class="example-modal">
    <div class="modal fade" id="editkaryawan<?php echo $data['user_id']; ?>" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Data Karyawan</h3>
                </div>
                <div class="modal-body">
                    <form action="./model_controller/edit_data.php?user_id=<?php echo $data['user_id']; ?>" method="post" role="form">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Employee ID
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="employee_id" value="<?php echo $data['employee_id']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Name
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Job Title
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="job_title" value="<?php echo $data['job_title']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Email
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="register" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>