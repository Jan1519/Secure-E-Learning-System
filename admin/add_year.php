<div class="row-fluid">
    <!-- block -->
    <div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add Year</div>            
    </div>
        <div class="block-content collapse in">
        <div class="span12">
            <form method="post">
            <div class="control-group">
            <div class="controls">
                <input class="input focused" name="year" id="focusedInput" type="text" placeholder = "Year" required>
            </div>
            </div>
            <div class="control-group">
            <div class="controls">
                <button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
            </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    <!-- /block -->
</div>

<?php
if (isset($_POST['save'])){
$year = $_POST['year'];

$query = mysqli_query($con,"select * from year where year = '$year'")or die(mysqli_error($con));
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysqli_query($con,"insert into year (year) values('$year')")or die(mysqli_error($con));

mysqli_query($con,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Year $year')")or die(mysqli_error($con));
?>
<script>
window.location = "year.php";
</script>
<?php
}
}
?>