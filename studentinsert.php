<<?php 
	include "conn.php"
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$branch=$_POST['branch'];
	$phno=$_POST['phno'];

	$query="INSERT INTO 'students'('student_name','student_email','student_address','student_branch','student_phno')"
	


 ?>