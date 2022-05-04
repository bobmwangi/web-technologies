<?php

$result_st = $conn->query("SELECT * FROM staff");
$st_count = $result_st->num_rows;
$result_st->close();

$result_dp = $conn->query("SELECT * FROM payments");
$dp_count = $result_dp->num_rows;
$result_dp->close();

$result_pr = $conn->query("SELECT * FROM programmes");
$pr_count = $result_pr->num_rows;
$result_pr->close();

$result_ap = $conn->query("SELECT * FROM applications");
$ap_count = $result_ap->num_rows;
$result_ap->close();


?>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body bg-primary-muted">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Applications</h6>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h3 class="mb-2"><?php echo $ap_count; ?></h3>
                        <div class="d-flex align-items-baseline">
                            <p class="text-black">
                                <span>Online applications</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body bg-primary-muted">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Staff members</h6>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h3 class="mb-2"><?php echo $st_count; ?></h3>
                        <div class="d-flex align-items-baseline">
                            <p class="text-black">
                                <span>Staff members</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body bg-primary-muted">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Payments</h6>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h3 class="mb-2"><?php echo $dp_count; ?></h3>
                        <div class="d-flex align-items-baseline">
                            <p class="text-black">
                                <span>Payment records</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body bg-primary-muted">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Programmes</h6>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h3 class="mb-2"><?php echo $pr_count; ?></h3>
                        <div class="d-flex align-items-baseline">
                            <p class="text-black">
                                <span>Programmes</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>