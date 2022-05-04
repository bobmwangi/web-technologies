<?php
$ReadRD = "SELECT * FROM programmes WHERE id= '$id'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $type = $rowRD['programme_type'];
    $name = $rowRD['programme_name'];
    $desc = $rowRD['programme_description'];
    $stt = $rowRD['status'];
}

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $name = mysqli_real_escape_string($conn, $name);

    $type = trim($_POST["type"]);
    $type = mysqli_real_escape_string($conn, $type);

    $stt = trim($_POST["status"]);
    $stt = mysqli_real_escape_string($conn, $stt);

    $desc = trim($_POST["description"]);
    $desc = mysqli_real_escape_string($conn, $desc);

    $sqlll = "UPDATE programmes SET programme_type='$type', programme_name= '$name', programme_description='$desc', status='$stt' WHERE id='$id'";
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
            <h4 class="card-title">Edit programme info</h4>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Programme type *</label>
                        <input type="text" name="type" value="<?php echo "$type"; ?>"
                               class="form-control" required placeholder="Enter type">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Programme name *</label>
                        <input type="text" name="name" value="<?php echo "$name"; ?>"
                               class="form-control" required placeholder="Enter name">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Programme description *</label>
                        <textarea required name="description" rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter Description"><?php echo "$desc"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Programme status *</label>
                        <input type="text" name="status" value="<?php echo "$stt"; ?>"
                               class="form-control" required placeholder="Enter status">
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="submitBtn" value="Submit">
        </form>
    </div>
</div>
