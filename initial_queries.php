<?php

$host=$_REQUEST['host'];
$user=$_REQUEST['admin'];
$pass=$_REQUEST['pass'];
$db=$_REQUEST['db'];

$create_table_users_query = 'CREATE TABLE users
(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(255),
    pass varchar(255),
    email varchar(255)
);';


if(@mysqli_connect($host,$user,$pass)){
	$con=mysqli_connect($host,$user,$pass);
	/**Authenticated**/
	if(@mysqli_select_db($con,$db)){
		/**Successfully connected to Database**/
		if(@mysqli_query($con,$create_table_users_query)){
			echo "Installation Completed\n";
			unlink('installation.php');
		}else{
			echo "Installation Failed\n";
		}
	}else{
		echo "Unsuccessfull in connecting to Database\n";
		die();
	}
}else{
	echo "Authentication Failed\n";
	die();
}

?>
