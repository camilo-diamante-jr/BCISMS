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

            <section class="content">
                <div class="table-responsive">
                    <div class="card elevation-1">
                        <header class="card-header bg-white">
                            <div class="d-flex align-items-center py-2 justify-content-between">
                                <h5 class="mb-0">List of Courses</h5>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Create</a>
                                    <a href="#" class="btn btn-success btn-sm">Import</a>
                                </div>
                            </div>

                        </header>
                        <div class="card-body">
                            <table id="courseTable" class="table align-middle table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BSIT</td>
                                        <td class="text-uppercase">Bachelor of Science in Information Technology</td>
                                        <td>Basic concepts of computer science and programming.</td>
                                        <td>
                                            <a href="#" class="text-primary">
                                                <i class="fas fa-pencil-alt mx-2"></i>
                                            </a>
                                            <a href="#" class="text-danger">
                                                <i class="fas fa-archive"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
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
        $('#courseTable').DataTable({
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