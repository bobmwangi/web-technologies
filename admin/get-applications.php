<?php
$ReadSql = "SELECT * FROM applications";
$res = mysqli_query($conn, $ReadSql);
$countRes = mysqli_num_rows($res);

?>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <?php include 'success-error-message.php'; ?>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <p class="card-title">Staff (<?php echo "$countRes"; ?>)</p>
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
                                <th>Contact</th>
                                <th>Course applied</th>
                                <th>Date</th>
                                <th>Education level</th>
                                <th>Nationality</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $phone = $row['phone'];

                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td class='text-wrap'>$name</td>";
                                echo "<td>$phone<br>$email</td>";
                                echo "<td class='text-wrap'>" . $row['course_applied'] . "</td>";
                                echo "<td>" . $row['date_of_application'] . "</td>";
                                echo "<td>" . $row['education_level'] . "</td>";
                                echo "<td>" . $row['nationality'] . "</td>";
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