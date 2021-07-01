<div class="row-fluid">
    <a href="school_year.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Year</a>
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Year</div>
        </div>
        
        <?php
        $query = mysqli_query($con,"select * from year where year_id = '$get_id'")or die(mysqli_error($con));
        $row = mysqli_fetch_array($query);
        ?>
        
        <div class="block-content collapse in">
        <div class="span12">
            <form method="post">
                <div class="control-group">
                <div class="controls">
                <input name="year" value="<?php echo $row['year']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Class Name" required>
                </div>
                </div>
                
                <div class="control-group">
                <div class="controls">
                <button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>
                </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    <!-- /block -->
</div>
    <?php
    if (isset($_POST['update'])){
    $year = $_POST['year'];

    mysqli_query($con,"update year set year = '$year' where year_id = '$get_id' ")or die(mysqli_error($con));
    ?>

    <script> window.location = "school_year.php"; </script>
    
    <?php
    }
    ?>