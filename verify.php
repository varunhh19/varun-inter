<<?php 
 include 'conn.php';
 $email=$_POST['email'];
 $password=4-POST['PASSWORD'];
 $query="SELECT password FROM `user` WHERE `email`='$email'";
 session_start();
 $result=mysqli_query($con,$query);
 $row=mysqli_fetch_row($result);
 	$db_password=$row[0];
 	if(password_verify($password, $db_password)){
 		$_SESSION[$email]=$email;
 		header("location:index.php?email=$email");
 	}
 	else{
 		$message="password or email address incorrect";
 		header("location: login.php?message=$message");
 	}
 ?>