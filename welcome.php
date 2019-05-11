<?php
	$userName = "admin";
	$passWord = "admin";

	session_start();
	if (isset($_SESSION['txtUsername'])){
		echo "<h1>Welcome ".$_SESSION['txtUsername']."</h1>";
		echo "<a href ='product.php'>Products </a><br>";
		echo "<br><a href = 'logout.php'><input type ='button' name='btnLogOut' value='Log-Out'>";


	}else{
		if($_POST['txtUsername'] == $userName && $_POST['txtPassword'] == $passWord){
			$_SESSION['txtUsername'] = $userName;
			echo "<script>location.href ='welcome.php'</script>";		
		}else{
			echo "<script>alert('Username or Password incorrect!!!')</script>";
			header("Refresh:0;url=login.php");

		}

	}


?>
