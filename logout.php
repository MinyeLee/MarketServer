<?php
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['usernick']);
  unset($_SESSION['userlevel']);

  echo("
       <script>
          location.href = './home.php'; 
         </script>
       ");
?>
