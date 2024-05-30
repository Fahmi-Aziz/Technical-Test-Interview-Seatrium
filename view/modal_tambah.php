<div class="example-modal">
    <div id="tambahkaryawan" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tambah Karyawan Baru</h3>
                </div>
                <div class="modal-body">
                    <form action="./model_controller/tambah_data.php" method="post" role="form">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Employee ID
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="employee_id" placeholder="e.g., 102030" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Name
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" placeholder="e.g., Jon" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Job Title
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="job_title" placeholder="e.g., IT Manager" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-left">Email
                                    :</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" placeholder="e.g., it.mng@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <input type="submit"  class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>