<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      
      
      
		
      if($result->num_rows == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
        
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
     <link rel="stylesheet" type="text/css" href="style.css">
      
   </head>
   
   <body>
	
      <div class = "center">
         <div style = "width:300px; border: solid 4px skyblue;">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class="box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class="box"/><br/><br />
                  <input type = "submit" value = " Submit "/>
                
               </form>
               
               <div style = "font-size:14px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>