<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>
<p>
      <h1>Welcome <?php echo $login_session; ?></h1><br>
       <h1><strong>Its just a simple page.</h1></strong>
      <h2><a href = "logout.php">log Out</a></h2>
</p>   
</body>
   
</html>