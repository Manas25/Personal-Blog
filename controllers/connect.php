<?php
	$host='localhost';$user='root';$pass='';$db='personal_blog';
	@mysqli_connect($host,$user,$pass)||die('couldn\'t connect');
	$con=mysqli_connect($host,$user,$pass,$db);
	
