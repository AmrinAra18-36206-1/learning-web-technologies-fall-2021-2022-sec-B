<?php
  session_start();
  session_destroy();
  echo "You have successfully logged out. Click here to <a href='login.php'>login</a>";
?>