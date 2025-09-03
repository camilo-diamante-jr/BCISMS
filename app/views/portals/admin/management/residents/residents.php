<?php
$this->renderView('/portals/partials/layouts/admin/header', $data);
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $contentHeaderTitle ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active"><?= $breadcrumbActiveItem ?></li>
                    </ol>
                </div>
            </div>

            <!-- Appointments Table -->
            <section class="content">
                <div class="card elevation-4">
                    <header class="card-header bg-white">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">List of Residence</h5>

                        </div>
                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Sitio</th>
                                        <th>Phone</th>
                                        <th>Household</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($residents as $resident) : ?>
                                        <td>
                                            <?= $resident['firstName'] . $resident['lastName'] ?>
                                        </td>
                                        <td>
                                            <?php
                                            $birthdate = $resident['date_of_birth'];

                                            $today = new DateTime();
                                            $birthDate = DateTime::createFromFormat("m-d-Y", $birthdate);
                                            $age = $today->diff($birthDate)->y;

                                            echo $age;
                                            ?>

                                        </td>
                                        <td><?= $resident['sitio'] ?></td>
                                        <td><?= $resident['phone'] ?></td>
                                        <td><?= $resident['household'] ?></td>
                                        <td>
                                            <?php
                                            $status = $resident['status'];

                                            switch ($status) {
                                                case "active":
                                                    echo "<p class='text-center bg-success rounded-pill'>$status</p>";
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href=""> <i class="fa fa-eye me-3"></i> </a>
                                            <a href=""> <i class="fa fa-edit me-3"></i> </a>
                                            <a href=""> <i class="fa fa-archive me-3"></i> </a>
                                        </td>

                                    <?php endforeach; ?>
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
        // $('#appointmentsTable').DataTable();
        $('.fa-eye').hover(function() {
            $(this).toggleClass("text-cyan");
        });
        $('.fa-edit').hover(function() {
            $(this).toggleClass("text-success");
        });
        $('.fa-archive').hover(function() {
            $(this).toggleClass("text-danger");
        });
    });
</script>