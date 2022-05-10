<?php
$ReadRD = "SELECT * FROM sliders WHERE id= '1'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $id = $rowRD['id'];
    $st1 = $rowRD['slider_1_title'];
    $sd1 = $rowRD['slider_1_description'];
    $st2 = $rowRD['slider_2_title'];
    $sd2 = $rowRD['slider_2_description'];
    $st3 = $rowRD['slider_3_title'];
    $sd3 = $rowRD['slider_3_description'];
}

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $st1 = trim($_POST["st1"]);
    $st1 = mysqli_real_escape_string($conn, $st1);

    $st2 = trim($_POST["st2"]);
    $st2 = mysqli_real_escape_string($conn, $st2);

    $st3 = trim($_POST["st3"]);
    $st3 = mysqli_real_escape_string($conn, $st3);

    $sd1 = trim($_POST["sd1"]);
    $sd1 = mysqli_real_escape_string($conn, $sd1);

    $sd2 = trim($_POST["sd2"]);
    $sd2 = mysqli_real_escape_string($conn, $sd2);

    $sd3 = trim($_POST["sd3"]);
    $sd3 = mysqli_real_escape_string($conn, $sd3);

    $sqlll = "UPDATE sliders SET slider_1_title='$st1', slider_2_title='$st2', slider_3_title ='$st3', 
                           slider_1_description = '$sd1', slider_2_description='$sd2', slider_3_description='$sd3' WHERE id='1'";
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
            <h4 class="card-title">Edit home page sliders</h4>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Slider 1 Title *</label>
                        <textarea name="st1" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter slider 1 title"><?php echo "$st1"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Slider 1 Description *</label>
                        <textarea name="sd1" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter slider 1 description"><?php echo "$sd1"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Slider 2 Title *</label>
                        <textarea name="st2" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter slider 2 title"><?php echo "$st2"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Slider 2 Description*</label>
                        <textarea name="sd2" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter slider 2 description"><?php echo "$sd2"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Slider 3 Title *</label>
                        <textarea name="st3" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter slider 3 title"><?php echo "$st3"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Slider 3 Description*</label>
                        <textarea name="sd3" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter slider 3 description"><?php echo "$sd3"; ?></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="submitBtn" value="Submit">
        </form>
    </div>
</div>
