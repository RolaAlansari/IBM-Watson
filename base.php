
<!DOCTYPE html>
<html lang="en" dir="ltr">
 
<head>

         <title>Smart Methods</title>
		 <meta charset="UTF-8">
		 
         <link rel="stylesheet" href="style.css">
		
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          
</head>

<body> 
			<div class="header">
			
		      <h1> Base Control </h1>
		    </div>
 

    <div class="main">
	<form action="base.php" method="POST">
	
	<div class="Forward">
		   <input type="submit" value="Forward" name="Forward" class="Forward"><br>  
    </div>
	
	<div class="Left">
	      <input type="submit" value="Left" name="Left" class="Left"> <!--for button save and on-->
    </div>
	
	<div class="Right">
		  <input type="submit" value="Right" name="Right" class="Right"><br>
    </div>
	
	<div class="Backward">
		  <input type="submit" value="Backward" name="Backward" class="Backward"><br>
	</div>
	
	<div class="stop">
		  <input type="submit" value="Stop" name="Stop" class="stop">
    </div>
			
	
      
		
             
 


 

</form>
</div>
    
	  
  

<style>
	body{
		

		background-color:#B0E0E6;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
		background-color:#B0E0E6;
		display: flex;
		flex-direction:column;
		justify-content: space-around;
		align-items:center;
		font-family:sans-serif;
		position: fixed;
		top: 50%;
		width: 100%;
		text-align: center;
		font-size: 10px;
		
		
	 
}
    .Forward{
       position:fixed;
	   top:25%;
	   left:32%;
	   padding: 14px 36px;
	   border-radius: 12px;
	   transition-duration: 0.4s;
	   border-color: #00008B;
	   color:#000088;
	}
	.Forward:hover {
      background-color: #000080; 
      color: white;
  }
	.Left{
	
	  
	   position:fixed;
	   top:49%;
	   left:1%;
	   right:10%;
	   padding: 14px 40px;
	   border-radius: 12px;
	 ;
	   border-color: #00008B;
	   color:#000088;
	
	}
	.Left:hover {
      background-color: #000080; 
      color: white;
	
  }
	.Right{
	 position:fixed;
	 right:38%;
	 left:70%;
	 top:49%;
	 padding: 14px 40px;
	 border-radius: 12px;
	 border-color: #00008B;
	 color:#000088;
	}
	.Right:hover {
      background-color: #000080; 
      color: white;
  }
	.Backward{
	 position:fixed;
	 border-radius: 12px;
	 left:30%;
	 top:75%;
	 padding: 14px 33px;
	 border-color: #00008B;
	 color:#000088;
	}
	.Backward:hover {
      background-color: #000080; 
      color: white;
  }
	.stop{
	 position: fixed;
     top:50%;
	 right:41%;
	 left:42%;
	 border-radius: 12px;
	 padding: 14px;
	 border-color: #00008B;
	 color:#000088;
  }
	
	.stop:hover {
      background-color: #000080; 
      color: white;
  
	}
	.main{
	 width:400px;
	 height:300px;
	 background: rgba(255,255,255,0.5);
	 color:white;
	 top:60%;
	 left:50%;
	 position:fixed;
	 transform:translate(-50%,-50%);
	 box-sizing:border-box;
	
	}
	.header{
		
		position: fixed;
		top: 1%;
		width: 30%;
		high:50%;
		border: 5px solid #000080;
		padding: 20px;
		margin: 5px;
		background: rgba(255,255,255,0.5);
	    font-family: "Lucida Console", "Courier New", monospace;
		color:#000088;
		right:33%;
	}
	 
	 

	@media screen and (max-width: 750px){
		body{
		

		background:#87CEEB;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
		
		display: flex;
		flex-direction:column;
		justify-content: space-around;
		align-items:center;
		font-family:sans-serif;
		position: fixed;
		top: 50%;
		width: 100%;
		text-align: center;
		font-size: 10px;
		
		
		
		}
	  .header{
		
		position: fixed;
		top: 1%;
		width: 30%;
		high:50%;
		border: 5px solid #000080;
		padding: 20px;
		margin: 5px;
		background: rgba(255,255,255,0.5);
	    font-family: "Lucida Console", "Courier New", monospace;
		color:#000088;
		right:33%;
	}	
	 
	}
	
	
</style>




<?php
	$host="localhost";
	$user="root";
	$databasename="base_control";
	
	
	$connect1=mysqli_connect($host,$user,"",$databasename) ; //connect to sql
	
	/*if(isset($connect1)){
		echo "The database has been successfully connected";
	}
	else{
		echo "database not connected";
	}*/
	
 
	
	//save the data from html to this variable 
	

	
	if(isset($_POST['Forward'])){
        /*for save data in database*/
	
		$query= "INSERT INTO `base_move`(`Forward`) VALUES ('Forward')";
		$result= mysqli_query($connect1,$query);
	}
	elseif(isset($_POST['Backward'])){
        /*for save data in database*/
	
		$query= "INSERT INTO `base_move`(`Backward`) VALUES ('Backward')";
		$result= mysqli_query($connect1,$query);
	}
	elseif(isset($_POST['Left'])){
        /*for save data in database*/
	
		$query= "INSERT INTO `base_move`(`left_L`) VALUES ('Left')";
		$result= mysqli_query($connect1,$query);
	}
	elseif(isset($_POST['Right'])){
        /*for save data in database*/
	
		$query= "INSERT INTO `base_move`(`right_R`) VALUES ('Right')";
		$result= mysqli_query($connect1,$query);
	}
	else{
		$query= "INSERT INTO `base_move`(`Stop`) VALUES ('Stop')";
		$result= mysqli_query($connect1,$query);
	}







?>

</body>	  
</html>
