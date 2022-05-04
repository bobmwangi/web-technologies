<?php
$ReadSql = "SELECT * FROM payments";
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
                                <th>Amount</th>
                                <th>Account</th>
                                <th>Reference</th>
                                <th>Platform</th>
                                <th>Date paid</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $amount = $row['amount'];
                                $account = $row['account'];
                                $date = $row['date'];
                                $ref = $row['reference'];
                                $status = $row['status'];
                                $platform = $row['platform'];

                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$amount</td>";
                                echo "<td>$account</td>";
                                echo "<td>$ref</td>";
                                echo "<td>$platform</td>";
                                echo "<td>$date</td>";
                                echo "<td>$status</td>";
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