<?php
$this->renderView('/portals/partials/layouts/admin/header', $data);
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Appointments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Appointments</li>
                    </ol>
                </div>
            </div>

            <!-- Appointments Table -->
            <section class="content">
                <div class="card elevation-4">
                    <header class="card-header bg-white">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">List of Guidance Office Appointments</h5>

                        </div>
                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="appointmentsTable" class="table table-bordered table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Student Name</th>
                                        <th>Appointment Date</th>
                                        <th>Time</th>
                                        <th>Purpose</th>
                                        <th>Guidance Counselor</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($appointments as $index => $appointment) : ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= htmlspecialchars($appointment['student_name']) ?></td>
                                            <td><?= date('F d, Y', strtotime($appointment['appointment_date'])) ?></td>
                                            <td><?= date('h:i A', strtotime($appointment['time'])) ?></td>
                                            <td><?= htmlspecialchars($appointment['purpose']) ?></td>
                                            <td><?= htmlspecialchars($appointment['counselor']) ?></td>
                                            <td>
                                                <?php
                                                $status = $appointment['status'];
                                                $badgeClass = '';

                                                switch (strtolower($status)) {
                                                    case 'pending':
                                                        $badgeClass = 'badge badge-warning';
                                                        break;
                                                    case 'completed':
                                                        $badgeClass = 'badge badge-success';
                                                        break;
                                                    case 'cancelled':
                                                        $badgeClass = 'badge badge-danger';
                                                        break;
                                                    default:
                                                        $badgeClass = 'badge badge-secondary';
                                                        break;
                                                }
                                                ?>
                                                <span class="<?= $badgeClass ?>"><?= htmlspecialchars($status) ?></span>
                                            </td>


                                        </tr>
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
        $('#appointmentsTable').DataTable();
    });
</script>