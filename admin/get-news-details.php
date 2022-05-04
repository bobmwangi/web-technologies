<?php
$ReadRD = "SELECT * FROM news WHERE id= '$id'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $title = $rowRD['title'];
    $desc = $rowRD['description'];
}

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST["title"]);
    $title = mysqli_real_escape_string($conn, $title);

    $desc = trim($_POST["description"]);
    $desc = mysqli_real_escape_string($conn, $desc);

    $sqlll = "UPDATE news SET title='$title', description= '$desc' WHERE id='$id'";
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
            <h4 class="card-title">Edit news</h4>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Title *</label>
                        <textarea required name="title" rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter title"><?php echo "$title"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Description *</label>
                        <textarea required name="description" rows="4" class="form-control"
                                  style="line-height: normal;" placeholder="Enter description"><?php echo "$desc"; ?></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="submitBtn" value="Submit">
        </form>
    </div>
</div>
