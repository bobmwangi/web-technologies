<?php
$ReadSql = "SELECT * FROM staff";
$res = mysqli_query($conn, $ReadSql);
$countRes = mysqli_num_rows($res);

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $desc = trim($_POST["description"]);
    $desc = mysqli_real_escape_string($conn, $desc);

    $title = trim($_POST["title"]);
    $title = mysqli_real_escape_string($conn, $title);

    $name = trim($_POST["name"]);
    $name = mysqli_real_escape_string($conn, $name);

    $sqlINV = "INSERT INTO staff (title, description, name)values ('$title','$desc', '$name')";
    if (mysqli_query($conn, $sqlINV)) {

        $last_id = $conn->insert_id;
        $success = "Staff added successfully<br/><a href='view-news.php?id=$last_id'>View staff</a>";
        echo "<meta http-equiv='refresh' content='1'>";
    } else {
        $error = "An error occurred: " . mysqli_error($conn);
    }
}
?>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <?php include 'success-error-message.php'; ?>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <p class="card-title">Staff (<?php echo "$countRes"; ?>)</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addstaff">
                        Add staff
                    </button>
                </div>
                <?php
                if ($countRes > 0) {
                    ?>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $title = $row['title'];
                                $desc = $row['description'];

                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td><a href='view-staff.php?id=$id'>$name</a></td>";
                                echo "<td>$title</td>";
                                echo "<td>$desc</td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                } else {
                    echo "<div class='alert alert-warning' role='alert'>No items found</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>


<!-- Modal - add-->
<div class="modal fade" id="addstaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="control-label font-weight-bold">Name *</label>
                                <input type="text" name="name" required class="form-control"
                                       placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="control-label font-weight-bold">Job title *</label>
                                <input type="text" name="title" required class="form-control"
                                       placeholder="Enter job title">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="control-label font-weight-bold">Description *</label>
                                <textarea name="description" required rows="6" class="form-control"
                                          style="line-height: normal;" placeholder="Enter description"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" id="submitBtn" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
