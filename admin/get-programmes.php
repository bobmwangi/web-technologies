<?php
$ReadSql = "SELECT * FROM programmes";
$res = mysqli_query($conn, $ReadSql);
$countRes = mysqli_num_rows($res);

$pdflink = $success = $error = "";

?>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <?php include 'success-error-message.php'; ?>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <p class="card-title">Study programmes (<?php echo "$countRes"; ?>)</p>
                </div>
                <?php
                if ($countRes > 0) {
                    ?>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $type = $row['programme_type'];
                                $name = $row['programme_name'];
                                $desc = $row['programme_description'];

                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$type</td>";
                                echo "<td><a href='view-programme.php?id=$id'>$name</a></td>";
                                echo "<td class='text-wrap'><p>$desc</></td>";
                                echo "<td>" . $row['status'] . "</td>";
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