<?php
session_destroy();
setcookie("Admin_name",$Admin_name,time()-1);
header("Location:home.html");

?>