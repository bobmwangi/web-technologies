<?php
$ReadSql = "SELECT * FROM news";
$res = mysqli_query($conn, $ReadSql);
$countRes = mysqli_num_rows($res);

$success = $error = "";

//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $desc = trim($_POST["description"]);
    $desc = mysqli_real_escape_string($conn, $desc);

    $title = trim($_POST["title"]);
    $title = mysqli_real_escape_string($conn, $title);

    $sqlINV = "INSERT INTO news (title, description)values ('$title','$desc')";
    if (mysqli_query($conn, $sqlINV)) {

        $last_id = $conn->insert_id;
        $success = "News added successfully<br/><a href='view-news.php?id=$last_id'>View news</a>";
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
                    <p class="card-title">News (<?php echo "$countRes"; ?>)</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnews">
                        Add new
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
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $desc = $row['description'];

                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td><a href='view-news.php?id=$id'>$title</a></td>";
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
<div class="modal fade" id="addnews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add news</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" enctype='multipart/form-data' method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="control-label font-weight-bold">Title *</label>
                                <textarea name="title" required rows="6" class="form-control"
                                          style="line-height: normal;" placeholder="Enter title"></textarea>
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
