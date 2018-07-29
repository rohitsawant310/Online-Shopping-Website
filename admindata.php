<?php
session_start();
echo "admin data";
echo "this is admin page";

echo "<br>";
echo "cookie is".$_COOKIE['Admin_name'];

?>
<html>
<body>
<form action="adminlogout.php">
<input type="submit" value="logout">

</form>
</body>
</html>