<!DOCTYPE HTML> 
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Teacher Login Page</title>
</head>
<body>
 
 
<?php
  if(isset($_COOKIE['username']) and isset($_COOKIE['pass'])){
	  $username = $_COOKIE['username'];
	  $pass = $_COOKIE['pass'];
	  echo $username;
  }
?>
 
 <div class="container" style="text-align:center">
 
<form action="validate.php" method="post" >

   <h2>Welcome to Teacher Login Form</h2>
     <h3 class = "info">Username</h3>
    <input type="text" class = "info" name="username">
    <h3 class = "info">Password</h3>
    <input type="text" class = "info" name="password">	 <br> <br>

    <input type="submit" value="Login" name="login">	
<br>
	<input type="checkbox" name="remember" value="1"><span style='color:blue'>&nbsp;Remember Me <br>
	
 	  
  
 </form>
</div>
 </body>
</html>