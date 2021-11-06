<?php
   session_start();
      echo "Congratualation,you successfuly logged in our teacher page!!"." " . $_SESSION['username'];

  
   echo "<a href='logout.php'> logout</a>";

?>