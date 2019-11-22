<?php
   setcookie("user", "", time() - 3600);
   echo"<script>window.location='Login_Page.php'</script>";
?>