<?php

session_start();
unset($_SESSION["bassam"]);
header("location:login.php");
exit();
?>