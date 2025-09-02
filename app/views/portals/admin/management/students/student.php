<?php
$this->renderView('/portals/partials/layouts/admin/header', $data);
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $data['contentHeaderTitle'] ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $data['breadcrumbActiveItem']     ?></li>
                    </ol>
                </div>
            </div>

            <!-- Appointments Table -->
            <section class="content">
                <div class="card elevation-4">
                    <header class="card-header bg-white">
                        <div class="d-flex align-items-center py-2 justify-content-between">
                            <h5 class="mb-0">List of Students</h5>
                            <div class="div">
                                <button type="button" class="btn btn-sm btn-outline-primary" id="addStudentBtn">Create</button>
                                <button type="button" class="btn btn-sm btn-outline-success">Import</button>
                            </div>
                        </div>
                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="studentTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Student Id:</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>Computer Science</td>
                                        <td>johndoe@example.com</td>
                                        <td>(123) 456-7890</td>
                                        <td>
                                            <a id="editStudent" data-student-id="1" class="text-primary">
                                                <i class="fas fa-pencil-alt mx-2"></i>
                                            </a>
                                            <a href="/admin/students/delete/1" class="text-danger">
                                                <i class="fas fa-archive"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php $this->renderView('/portals/partials/layouts/admin/footer'); ?>

<script>
    $(document).ready(function() {
        $('#studentTable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>