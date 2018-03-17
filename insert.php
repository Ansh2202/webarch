<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Register data</title>
</head>
<body>
<?php
include('connect.php');
if(isset($_POST['submit'])) {
$username = mysqli_real_escape_string($db,$_POST['username']);
$password = mysqli_real_escape_string($db,$_POST['password']);
if(empty($username) || empty($password)) {


		if(empty($username)) {

			echo "Name field is empty.<br/>";

		}

	
		if(empty($password)) {

			echo "Password field is empty.<br/>";
		}
     echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

		
		}
 else{

$sql="INSERT INTO admin (username,password)
VALUES ('$username','$password')";

echo "New record added successfully";
	if(mysqli_query($db,$sql)){
	session_start();
  $_SESSION['username']=$username;
  header("Location:message.php");}
else
{

	echo "Error: " . $sql ."<br>" .mysqli_error($db);
  }

  }
}
?>
</body>
</html>
