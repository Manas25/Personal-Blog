<?php
	$host='localhost';$user='root';$pass='';
	@mysqli_connect($host,$user,$pass)||die('couldn\'t connect');
	$con=mysqli_connect($host,$user,$pass);
	$db='personal_blog';
	mysqli_select_db($con,$db) or die('couldnt connect to db');