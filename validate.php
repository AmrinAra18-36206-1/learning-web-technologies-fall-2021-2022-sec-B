<?php 
  $myusername = "Amrin_98";
  $mypass = "12345";
  
  if(isset($_POST['login'])){
	  $username = $_POST['username'];
	  $pass = $_POST['password'];
	  
	  if( $username == $myusername and $pass == $mypass){
		  if( isset($_POST['remember']) ){
		    setcookie('username', $username, time()+60*60*7*3);
		  }
		  session_start();
		    $_SESSION['username'] = $username;
			header("location: welcome log in page.php");
	  } else{
		  echo "Invalid Username or Password.<br> Click here to <a href='login.php'>try again</a>";  
	    }
	  
  } else{
	  header("location: login.php");
    }
  
?>