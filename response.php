<?php 
 	if(isset($_POST["submit"])) 
 	{ 
 	 	echo "<br/><br/>"; 
 	 	 
 	 	 
 	 	$enrolment = $_POST["enrollment"]; 
 	 	echo "Enrollment no.: $enrolment <br/>"; 
 
 	 	$name = $_POST["stdname"]; 
 	 	echo "Student name : $name <br/>"; 
 
 	 	$sem = $_POST["semester"]; 
 	 	echo "Semester : $sem <br/>"; 
 
 	 	$branch = $_POST["branch"]; 
 	 	echo "Branch : $branch <br/>"; 
 
 	 	$gender = $_POST["gender"]; 
 	 	echo "Gender : $gender <br/>"; 
 
 	 	$phone = $_POST["phone"]; 
 	 	echo "Mobile no. : $phone <br/>"; 
 
	 	 	$email = $_POST["email"]; 
	 	 	echo "Email address : $email <br/>"; 
 
	 	 	$address = $_POST["address"]; 
	 	 	echo "Address : $address <br/>"; 
 
	 	 	$query = "insert into Student_info values('$enrolment', '$name', '$sem', 
'$branch', '$gender', '$phone', '$email', '$address')"; 
	 	 	echo "$query"; 
 
	 	} 
 
?> 
 
