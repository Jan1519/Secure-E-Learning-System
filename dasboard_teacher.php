<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="class_div">
	<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
            <?php include('teacher_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
			<!-- breadcrumb -->	
                            <ul class="breadcrumb">
                            <?php
                            $year_query = mysqli_query($con,"select * from year order by year DESC")or die(mysqli_error($con));
                            $year_query_row = mysqli_fetch_array($year_query);
                            $year = $year_query_row['year'];
                            ?>
                            <li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
                            <li><a href="#">Year: <?php echo $year_query_row['year']; ?></a></li>
                            </ul>
			<!-- end breadcrumb -->
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                            <div id="count_class" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
				<?php include('teacher_class.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
<script type="text/javascript">
    $(document).ready( function() {
    $('.remove').click( function() {
        var id = $(this).attr("id");
        $.ajax({
        type: "POST",
        url: "delete_class.php",
        data: ({id: id}),
        cache: false,
        success: function(html){
        $("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
        $('#'+id).modal('hide');
        $.jGrowl("Your Class is Successfully Deleted", { header: 'Class Delete' });
        }
        }); 	
    return false;
    });				
    });
</script>
                </div>
		<?php include('teacher_right_sidebar.php') ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>