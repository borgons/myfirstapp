<?php 
	session_start();
	if(isset($_SESSION['txtUsername'])){
		echo "<h2>Welcome to Product Page </h2>";
		echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
			header("Refresh:0;url=login.php");
	}
?>
