<?php 
   
	if(isset($_POST) == true){
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		
		
		$location=$_SERVER['DOCUMENT_ROOT']."/Personal-Blog/images/propic/".$file_name;
		move_uploaded_file($file_tmp,$location);
		$profilepic="images/propic/".$file_name;

		echo $profilepic;
	}
	else{
		echo "failure";
	}
?>