<?php 
session_start();
			$_SESSION['aid']="";
			$_SESSION['category']="";
			$_SESSION['name']="";
			$_SESSION['astatus']="";
			$_SESSION['msg']="Successfully loggod out!";
			header("Location:index.php");
?>