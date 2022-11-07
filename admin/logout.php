

<?php
// session_start();
// unset($_SESSION["reg_id"]);
// unset($_SESSION["reg_name"]);
// header("Location:login.php");

session_start();
session_destroy();
header('Location: adminlogin.php');
exit;


?>