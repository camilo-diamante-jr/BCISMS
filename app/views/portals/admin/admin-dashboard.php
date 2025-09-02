<?php
$this->renderView('/portals/partials/layouts/admin/header', $data);
?>

<div class="content-wrapper">
    <header class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Dashboard Stat Cards -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-1 text-muted">Total Residents</p>
                                <h5 class="fw-bold"><?= "2,847" ?></h5>
                            </div>
                            <i class="fa fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-1 text-muted">Blotter Records</p>
                                <h5 class="fw-bold"><?= "124" ?></h5>
                            </div>
                            <i class="fa fa-exclamation-triangle fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-1 text-muted">Clearances Issued</p>
                                <h5 class="fw-bold"><?= "356" ?></h5>
                            </div>
                            <i class="fa fa-file-alt fa-2x text-success"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-1 text-muted">Assistance Requests</p>
                                <h5 class="fw-bold"><?= "78" ?></h5>
                            </div>
                            <i class="fa fa-hand-holding-heart fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <?php

            ?>

            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">Recent Activity</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($recentActivities as $activity): ?>
                        <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                            <div class="d-flex">
                                <small class="me-2">
                                    <?php if ($activity['activityType'] === 'resident'): ?>
                                        <i class="fa fa-user rounded-circle p-2 bg-success text-white"></i>
                                    <?php elseif ($activity['activityType'] === 'blotter'): ?>
                                        <i class="fa fa-exclamation-triangle rounded-circle p-2 bg-danger text-white"></i>
                                    <?php elseif ($activity['activityType'] === 'clearance'): ?>
                                        <i class="fa fa-file-alt rounded-circle p-2 bg-primary text-white"></i>
                                    <?php elseif ($activity['activityType'] === 'assistance'): ?>
                                        <i class="fa fa-hand-holding-heart rounded-circle p-2 bg-warning text-dark"></i>
                                    <?php else: ?>
                                        <i class="fa fa-info-circle rounded-circle p-2 bg-secondary text-white"></i>
                                    <?php endif; ?>
                                </small>
                                <div>
                                    <p class="fw-bold my-1"><?= htmlspecialchars($activity['headline']) ?></p>
                                    <p class="text-muted my-1"><?= htmlspecialchars($activity['activity']) ?></p>
                                    <p class="small text-muted"><i class="fa fa-clock me-1"></i><?= htmlspecialchars($activity['dateCreated']) ?></p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-light shadow px-2 rounded-pill">
                                    <span><?= ucfirst(htmlspecialchars($activity['activityType'])) ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body d-flex flex-wrap gap-2">
                    <a href="/residents/add" class="btn btn-primary">
                        <i class="fa fa-user-plus me-2"></i> Register New Resident
                    </a>
                    <a href="/blotter/add" class="btn btn-danger">
                        <i class="fa fa-exclamation-triangle me-2"></i> Add Blotter Record
                    </a>
                    <a href="/clearances/issue" class="btn btn-success">
                        <i class="fa fa-file-alt me-2"></i> Issue Clearance
                    </a>
                    <a href="/assistance/request" class="btn btn-warning">
                        <i class="fa fa-hand-holding-heart me-2"></i> Log Assistance Request
                    </a>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
</div>

<?php
$this->renderView('/portals/partials/layouts/admin/footer');
?>