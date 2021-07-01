<?php
    $year_query = mysqli_query($con,"select * from year order by year DESC")or die(mysqli_error($con));
    $year_query_row = mysqli_fetch_array($year_query);
    $year = $year_query_row['year'];
?>
				
<?php $query_yes = mysqli_query($con,"select * from teacher_class_student
    LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
    LEFT JOIN class ON class.class_id = teacher_class.class_id 
    LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
    LEFT JOIN teacher ON teacher.teacher_id = teacher_class_student.teacher_id 
    JOIN notification ON notification.teacher_class_id = teacher_class.teacher_class_id 
    where teacher_class_student.student_id = '$session_id' and year = '$year'   order by notification.date_of_notification DESC
    ")or die(mysqli_error($con));
    $count_no = mysqli_num_rows($query_yes);
?>

<?php $query_no = mysqli_query($con,"select * from notification 
    LEFT JOIN notification_read ON notification_read.notification_id = notification.notification_id
    where notification_read.student_id  = '$session_id'
    ")or die(mysql_error());
    $count_yes = mysqli_num_rows($query_no);
?>
					
<?php $not_read = $count_no -  $count_yes; ?>