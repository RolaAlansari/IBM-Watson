<?php

$host="localhost";
	$user="root";
	$databasename="base_control";
	
	
	$connect1=mysqli_connect($host,$user,"",$databasename) ; //connect to sql
	
   /* if(isset($connect1)){
		echo "The database has been successfully connected";
	}
	else{
		echo "database not connected";
	}*/
	

$req="SELECT * From base_move ORDER BY ID DESC LIMIT 1";
$query=mysqli_query($connect1,$req);

while($row=mysqli_fetch_array($query)){
 echo "".$row['Forward']." ".$row['Backward']." ".$row['Stop']." ".$row['left_L']." ".$row['right_R']."<br>";
}

?>