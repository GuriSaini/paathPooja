<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["user"] = "TOM";
if(empty($_SESSION)){
	echo"Empty";

}else{
	print_r($_SESSION);
}

session_destroy();
?>

</body>
</html>