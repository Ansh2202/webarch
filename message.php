<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Message</title>
</head>
<body>
<?php
session_start();
$username=$_SESSION['username'];
echo "<h1>hello</h1> $username";
?>
</body>
</html>