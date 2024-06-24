<?php
session_start();
session_destroy();
header("Location: index.php");
exit; // Ensure no further code is executed after the redirection
?>
