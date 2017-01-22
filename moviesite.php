<?php 
	session_start();
	if($_SESSION['authuser'] != 1){
		echo "Sorry you don't have permission";
		exit();
	}
?>
<html>
<head>
	<title> My Movie Site - <?php  echo $_REQUEST['favmovie']; ?></title>
</head>
<body>
	<?php  
		echo "Welcome to the site, ";
		//echo $_COOKIE['username'];
		echo $_SESSION['username'];
		echo "! <br>";
		//define("FAVMOVIE", "Fantastic Beasts");
		echo "My fave movies is ";
		echo $_REQUEST['favmovie'];
		echo "<br>";
		$movierating = 5;
		echo "I give it a: ";
		echo $movierating;

	?>

</body>
    <?php include "header.php"; ?>
</html>
