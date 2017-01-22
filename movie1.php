<?php 
	//setcookie('username', 'Joe', time()+60);
	session_start();
	//$_SESSION['username'] = "Joe123";
	$_SESSION['username'] = $_POST['user'];
	$_SESSION['userpass'] = $_POST['pass'];
	$_SESSION['authuser'] = 0;

	if(($_SESSION['username'] == 'Joe') and ($_SESSION['userpass'] == '12345')){
		$_SESSION['authuser'] = 1;
	}else{
		echo "Sorry you don't have permission";
		exit();
	}
?>
<html>
<head>
	<title>Find my Fave Movie. </title>
</head>
<body>
	<?php  
		$favmovie = urlencode('Life of Me');
		echo "<a href='moviesite.php?favmovie=$favmovie'>";
		echo "Click here";
		echo "</a>";
	?>

</body>
    
    <?php include "header.php"; ?>
</html>

