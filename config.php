<?php 
	$dbhost = "148.66.138.145";
    $dbuser = "portfolioSh";
    $dbpass = "portShUsr21!";
    $dbname = "portfolioSh";
?>
<?php 
    //create a mySQL DB connection:
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    //testing connection success
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }
?>