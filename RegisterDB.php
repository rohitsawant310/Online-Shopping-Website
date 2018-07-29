<?php
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$addr=$_REQUEST['addr'];
$x=1010;
$y='male';
$z='dob';

$con = mysqli_connect ( "localhost:3307", "root", "root" );

if ($con) {
	if (mysqli_select_db ( $con, "user02" )) {
		$query = 
		"insert into book values('$uname','$pass','$fname','$lname','$addr',$x,'$y','$z') ";
		
		if(mysqli_query($con, $query))
		{
			echo "Row inserted";
			
		}
		else
		{
			echo "Error " . mysqli_error ( $con );
		}
	} else {
		echo "Error " . mysqli_error ( $con );
	}
} else {
	echo "Error " . mysqli_error ( $con );
}

?>