<?php 

require_once "../../DB.php";
require_once "../../config.php";

session_destroy();
$redirectTo = APP_PATH."users/auth/login.php";
header("Location: $redirectTo");
exit();
