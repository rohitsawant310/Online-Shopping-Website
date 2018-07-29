
<?php
session_start();

$user_name=$_REQUEST['user_name'];
$password=$_REQUEST['password'];
setcookie("user_name",$user_name,time()+300);



$con=mysqli_connect("localhost:3307","root","root");

$x=$_REQUEST['user_name'];
$y=$_REQUEST['password'];
if($con)
{
	
	if(mysqli_select_db($con, "user02"))
	{
		echo "<h3>user name and password is wrong";
		
		//$query="select name from data where uname= '".$x."'";
		$query="select name from data where uname= '".$x."' && pass='".$y."'";
		//	select name from data where uname='rs' && pass='abc';
		if($res=mysqli_query($con, $query))
		{
			$_SESSION['key3']=$user_name;
			$_SESSION['key4']=$password;
			
			if($row=mysqli_fetch_array($res))
			{
				header("location:userdata.php");
			}
			
		}
		else {
			
			{
				echo "error wrong pass".mysqli_error($con);}
		}
		
	}
	else
	{
		echo "<h3> Query-Failed ".mysqli_error($con);
	}
}
else
{
	echo "<h3>Failed ".mysqli_error($con);
	
	
	
}

?>


