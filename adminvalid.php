
<?php

session_start();

$Admin_name=$_REQUEST['Admin_name'];
$A_password=$_REQUEST['A_password'];
setcookie("Admin_name",$Admin_name,time()+300);

$con=mysqli_connect("localhost:3307","root","root");

$x=$_REQUEST['Admin_name'];
$y=$_REQUEST['A_password'];
if($con)
{

	if(mysqli_select_db($con, "user02"))
	{
		echo "<h3>user name and password is wrong";
		
		//$query="select name from data where uname= '".$x."'";
		$query="select Admin_name from admin where Admin_name= '".$x."' && A_password='".$y."'";
		//	select name from data where uname='rs' && pass='abc';
		if($res=mysqli_query($con, $query))
		{
		   $_SESSION['key1']=$Admin_name;
		   $_SESSION['key2']=$A_password;
		if($row=mysqli_fetch_array($res))
		{
			header("location:admindata.php");
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
