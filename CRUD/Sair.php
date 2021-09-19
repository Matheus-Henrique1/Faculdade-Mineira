<?php
         session_start();
         $_SESSION = array();
         session_destroy();
         echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com/index.php'>";
         
?>