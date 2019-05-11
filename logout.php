<?php
	session_start();
	if(isset($_SESSION['txtUsername'])){
		session_destroy();
		echo "<script>Location.href = 'login.php'</script>";	
	}else{
		echo "<script>Location.href = 'login.php'</script>";


	}

?>
