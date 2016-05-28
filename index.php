<?php
	$install='installation.php';
	$first = 'first.php';
	if(file_exists($install)){
		header('Location:'.$install);	
	}else{
		header('Location:'.$first);
	}
?>