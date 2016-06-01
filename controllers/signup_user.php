<?php
	/*$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	echo $username;
	echo $email;
	echo $password;*/

	require 'connect.php';

	if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])){
		$username=$_POST['username'];$email=$_POST['email'];$password=$_POST['password'];
		if(!empty($username)&&!empty($email)&&!empty($password)){
			$pass=md5($password);
			$query="INSERT INTO `personal_blog`.`users` (`username`,`pass`,`email`) VALUES ('$username','$pass','$email')";
			if(mysqli_query($con,$query)){
				echo 'Success';
			}else{
				echo $con->error;
			}
		}else{
			echo 'Empty';
		}
	}else{
			echo 'Not Posted';
		}
?>