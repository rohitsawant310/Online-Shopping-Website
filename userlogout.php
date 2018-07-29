<?php
session_destroy();
setcookie("user_name",$user_name,time()-1);
header("Location:home.html");
?>