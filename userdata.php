<?php
session_start();

echo "this is user page";


echo "<br>";
echo "cookie is".$_COOKIE['user_name'];

?>
<html>
<body>
<form action="userlogout.php">
<input type="submit" value="logout">

</form>
</body>
</html>