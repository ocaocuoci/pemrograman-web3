<?php
session_start();
session_destroy();
header("location:sessionLoginForm.html");
exit;
?>
