<?php
$ReadRD = "SELECT * FROM departments WHERE id= '1'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $it = $rowRD['it'];
    $computing = $rowRD['computing'];
}

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $it = trim($_POST["it"]);
    $it = mysqli_real_escape_string($conn, $it);

    $computing = trim($_POST["computing"]);
    $computing = mysqli_real_escape_string($conn, $computing);

    $sqlll = "UPDATE departments SET it='$it', computing= '$computing' WHERE id='1'";
    if (mysqli_query($conn, $sqlll)) {
        $success = "Updated successfully";
        echo "<meta http-equiv='refresh' content='1'>";
    } else {
        $error = "An error occurred: " . mysqli_error($conn);
    }

}


?>
<div class="card overflow-hidden">
    <div class="card-body">
        <?php include 'success-error-message.php'; ?>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h4 class="card-title">Edit page</h4>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Computing *</label>
                        <textarea required name="computing" rows="5" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter computing"><?php echo "$computing"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">IT *</label>
                        <textarea required name="it" rows="5" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter IT"><?php echo "$it"; ?></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="submitBtn" value="Submit">
        </form>
    </div>
</div>
