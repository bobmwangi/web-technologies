<?php
$ReadRD = "SELECT * FROM about_page WHERE id= '1'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $id = $rowRD['id'];
    $msg_director = $rowRD['message_from_director'];
    $q1 = $rowRD['question_1'];
    $q2 = $rowRD['question_2'];
    $q3 = $rowRD['question_3'];
    $a1 = $rowRD['answer_1'];
    $a2 = $rowRD['answer_2'];
    $a3 = $rowRD['answer_3'];
}

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $msg_director = trim($_POST["msg_director"]);
    $msg_director = mysqli_real_escape_string($conn, $msg_director);

    $q1 = trim($_POST["q1"]);
    $q1 = mysqli_real_escape_string($conn, $q1);
    $a1 = trim($_POST["a1"]);
    $a1 = mysqli_real_escape_string($conn, $a1);

    $q2 = trim($_POST["q2"]);
    $q2 = mysqli_real_escape_string($conn, $q2);
    $a2 = trim($_POST["a2"]);
    $a2 = mysqli_real_escape_string($conn, $a2);

    $q3 = trim($_POST["q3"]);
    $q3 = mysqli_real_escape_string($conn, $q3);
    $a3 = trim($_POST["a3"]);
    $a3 = mysqli_real_escape_string($conn, $a3);

    $sqlll = "UPDATE about_page SET message_from_director='$msg_director', question_1='$q1', answer_1 ='$a1', 
                           question_2 = '$q2', answer_2='$a2', question_3='$q3', answer_3='$a3' WHERE id='1'";
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
                        <label class="control-label font-weight-bold">Message from director *</label>
                        <textarea required name="msg_director" rows="5" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter message from director"><?php echo "$msg_director"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Question 1 *</label>
                        <textarea name="q1" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter question 1"><?php echo "$q1"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Answer 1 *</label>
                        <textarea name="a1" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter answer 1"><?php echo "$a1"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Question 2 *</label>
                        <textarea name="q2" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter question 2"><?php echo "$q2"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Answer 2 *</label>
                        <textarea name="a2" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter answer 2"><?php echo "$a2"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Question 3 *</label>
                        <textarea name="q3" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter question 3"><?php echo "$q3"; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label font-weight-bold">Answer 3 *</label>
                        <textarea name="a3" required rows="4" class="form-control"
                                  style="line-height: normal;"
                                  placeholder="Enter answer 3"><?php echo "$a3"; ?></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="submitBtn" value="Submit">
        </form>
    </div>
</div>
