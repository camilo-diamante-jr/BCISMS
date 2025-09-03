<?php
$this->renderView('/portals/partials/layouts/admin/header', $data);
?>

<div class="content-wrapper">
    <header class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings</h1>
                    <p class="text-muted">Manage system settings and preferences</p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <section class="content">
        <div class="container-fluid">

            <!-- System Configuration -->
            <div class="card p-4 shadow-lg">
                <h5 class="fw-bold mb-1"><i class="fa fa-cog"></i> System Configuration</h5>
                <p class="text-muted mt-0">Basic system settings and configuration</p>

                <div class="mt-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Barangay Name</label>
                            <input type="text" class="form-control" name="barangayName" id="barangayName" value="Pulao" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Barangay Code</label>
                            <input type="text" class="form-control" name="barangayCode" id="barangayCode" value="BRG-05" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Barangay Captain</label>
                            <input type="text" class="form-control" name="barangayCaptain" id="barangayCaptain" value="Paulo S. Cruz" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="barangayCode" id="captainContactNumber" value="09987324251" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div class="card p-4 shadow-lg">
                <h5 class="fw-bold mb-1"><i class="fas fa-lock"></i> Security Settings</h5>
                <p class="text-muted mt-0">Basic system settings and configuration</p>



            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>

<?php
$this->renderView('/portals/partials/layouts/admin/footer');
?>