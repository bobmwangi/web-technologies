<?php
$ReadRD = "SELECT * FROM staff WHERE id= '$id'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $name = $rowRD['name'];
    $title = $rowRD['title'];
    $desc = $rowRD['description'];
    $img = $rowRD['image'];
}

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $name = mysqli_real_escape_string($conn, $name);

    $title = trim($_POST["title"]);
    $title = mysqli_real_escape_string($conn, $title);

    $desc = trim($_POST["description"]);
    $desc = mysqli_real_escape_string($conn, $desc);

    $sqlll = "UPDATE staff SET title='$title', name='$name', description= '$desc' WHERE id='$id'";
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
            <h4 class="card-title">Edit staff</h4>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Name *</label>
                        <input type="text" name="name" value="<?php echo "$name"; ?>" required class="form-control"
                               placeholder="Enter name">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Title *</label>
                        <input type="text" name="title" value="<?php echo "$title"; ?>" required class="form-control"
                               placeholder="Enter title">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <div class="pic"><img src="<?php echo "../$img"; ?>" class="img-fluid" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Description *</label>
                        <textarea required name="description" rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter description"><?php echo "$desc"; ?></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="submitBtn" value="Submit">
        </form>
    </div>
</div>
