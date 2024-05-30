<div class="table-responsive my-3">
    <table id="example" class="table table-striped table-bordered my-3">
        <thead>
            <tr>
                <td>NO</td>
                <td>Employee ID</td>
                <td>Name</td>
                <td>Job Title</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include "./koneksi.php";

            $query = mysqli_query($koneksi, "SELECT * FROM employee");

            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td>
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $data['employee_id']; ?>
                    </td>
                    <td>
                        <?php echo $data['name']; ?>
                    </td>
                    <td>
                        <?php echo $data['job_title']; ?>
                    </td>
                    <td>
                        <?php echo $data['email']; ?>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a class="fas fa-edit bg-success p-2 text-white rounded mr-2" data-toggle="modal" data-target="#editkaryawan<?php echo $data['user_id']; ?>"></a>
                            <a class="fas fa-trash-alt bg-danger p-2 text-white rounded mx-2" data-toggle="modal" data-target="#deletekaryawan<?php echo $data['user_id']; ?>"></a>
                            <a class="fas fa-eye bg-primary p-2 text-white rounded ml-2" data-toggle="modal" data-target="#viewkaryawan<?php echo $data['user_id']; ?>"></a>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>