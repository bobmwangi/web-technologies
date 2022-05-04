<?php
if (!empty($success)) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> <?php echo "$success"; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php }
if (!empty($error)) {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Failed</strong> <?php echo $error; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>