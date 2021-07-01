<?php
include('admin/dbcon.php');
$session_id = $_POST['session_id'];
$subject_id = $_POST['subject_id'];
$class_id = $_POST['class_id'];
$thumbnails = $_POST['thumbnails'];
$year = $_POST['year'];
$query = mysqli_query($con,"select * from teacher_class where subject_id = '$subject_id' and class_id = '$class_id' and teacher_id = '$session_id' and year = '$year' ")or die(mysqli_error($con));
$count = mysqli_num_rows($query);
if ($count > 0){ 
echo "true";
}else{

mysqli_query($con,"insert into teacher_class (teacher_id,subject_id,class_id,thumbnails,year) values('$session_id','$subject_id','$class_id','admin/uploads/thumbnails.jpg','$year')")or die(mysqli_error($con));

$teacher_class = mysqli_query($con,"select * from teacher_class order by teacher_class_id DESC")or die(mysqli_error($con));
$teacher_row = mysqli_fetch_array($teacher_class);
$teacher_id = $teacher_row['teacher_class_id'];


$insert_query = mysqli_query($con,"select * from student where class_id = '$class_id'")or die(mysqli_error($con));
while($row = mysqli_fetch_array($insert_query)){
$id = $row['student_id'];
mysqli_query($con,"insert into teacher_class_student (teacher_id,student_id,teacher_class_id) value('$session_id','$id','$teacher_id')")or die(mysqli_error($con));
echo "yes";
}
}
?>