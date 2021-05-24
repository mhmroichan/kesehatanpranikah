<?php  
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('open', '', time() - 3600);
setcookie('close', '', time() - 3600);

header("Location: ../../../index.php");
exit;

?>