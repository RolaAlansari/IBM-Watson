<!DOCTYPE html>
<html>
<head>

         <title>Smart Methods</title>
         <link rel="stylesheet " herf=style.css">

</head>
<body>
<h1 style="font-size:60px;"><center> Motor Control</center></h1><br> <!-- title -->


	
    <div class="container">
	
       <form action="arm.php" method="POST">
        <span class="text">Motor 1</span>  <!--slider for motor1  -->

         <div class="range-slide">
             <span id="rangeValue" class="rs-label">0</span>
               <input type="range"  name="motor1" main="0" max="180"  value="0" onChange="rangeSlide(this.value)" class="slider">
         </div>
		   <div class="box-minmax">
		    <span>0</span><span>180</span>
		  </div>
          <script type="text/javascript"> <!-- move slider using javaScript -->
             function rangeSlide(value){
                document.getElementById("rangeValue").innerHTML=value;
             }
        </script>

<span class="text">Motor2</span> <!--slider for motor2 -->


       <div class="range-slide">
             <span id="rangeValue1" class="rs-label">0</span>
			 <input type="range" name="motor2" main="0" max="180"  value="0" onChange="rangeSlide1(this.value)" class="slider">
         </div>
		 <div class="box-minmax">
		 <span>0</span><span>180</span>
		 </div>
        <script type="text/javascript"> <!-- move slider using javaScript -->
             function rangeSlide1(value){
                document.getElementById("rangeValue1").innerHTML=value;
             }
        </script>


<span class="text">Motor3</span> <!--slider for motor3-->

       <div class="range-slide">
             <span id="rangeValue2" class="rs-label">0</span>
			 <input type="range" id="motor33" name="motor3" main="0" max="180"  value="0" onChange="rangeSlide2(this.value)" class="slider">
         </div>
		 <div class="box-minmax">
		 <span>0</span><span>180</span>
		 </div>
        <script type="text/javascript"> <!-- move slider using javaScript -->
             function rangeSlide2(value){
                document.getElementById("rangeValue2").innerHTML=value;
             }
        </script>

<span class="text">Motor4</span> <!--slider for motor4-->

       <div class="range-slide">
             <span id="rangeValue3" class="rs-label">0</span>
			 <input type="range" id="motor44" name="motor4" main="0" max="180"  value="0" onChange="rangeSlide3(this.value)" class="slider">
         </div>
		 <div class="box-minmax">
		 <span>0</span><span>180</span>
		 </div>
        <script type="text/javascript"> <!-- move slider using javaScript -->
             function rangeSlide3(value){
                document.getElementById("rangeValue3").innerHTML=value;
             }
        </script>

<span class="text">Motor5</span>  <!--slider for motor5 -->

      <div class="range-slide">
             <span id="rangeValue4" class="rs-label">0</span>
			 <input type="range" id="motor55" name="motor5" main="0" max="180"  value="0" onChange="rangeSlide4(this.value)" class="slider">
         </div>
		 <div class="box-minmax">
		 <span>0</span><span>180</span>
		 </div>
        <script type="text/javascript"> <!-- move slider using javaScript -->
             function rangeSlide4(value){
                document.getElementById("rangeValue4").innerHTML=value;
             }
        </script>

<span class="text">Motor6</span>  <!--slider for motor6 -->

       <div class="range-slide">
             <span id="rangeValue5" class="rs-label">0</span>
			 <input type="range" id="motor66" name="motor6" main="0" max="180"  value="0" onChange="rangeSlide5(this.value)" class="slider">
         </div>
		   <script type="text/javascript"> <!-- move slider using javaScript -->
             function rangeSlide5(value){
                document.getElementById("rangeValue5").innerHTML=value;
             }
        </script>
		     
		 <div class="box-minmax"> <!-- range of slider between 0 and 180 -->
		 <span>0</span><span>180</span>
		 </div>
		 
		 
		 
		    <input type="submit" value="Save" name="save" class="button"> <!--for button save and on-->
			<input type="submit" value="On" name="on" class="button1">
           
		
             
    

</form>
 

</div>
	
<style>

    *{
	    margin:0;
	    padding:0;
		font-family: tahoma;
		font-size: medium;
	}
	
    body{
	   background:#ADD8E6;
	   height: 100%;
	   
			margin=0;
			padding=0;
            

	
	}
	.button{
	   width:100px;
	   height: 50px;
	   background-color:pink;
	   border-radius:20px;
	   border: 2px solid white;
	   padding:10px;
	   margin:20px;
	   position:sticky;
	   left:10%;
	}
	.button:hover{
	 background-color: #A2D9CE;
	 }
    .button1{
	   width:100px;
	   height: 50px;
	   background-color:pink;
	   border-radius:20px;
	   border: 2px solid white;
	   padding:10px;
	   margin:2px;
	   position:sticky;
	   left:10%;
	   
	}
	.button1:hover{
	 background-color: #A2D9CE;
	 }
		
	
	.container{
	        background-color: bink;
			
	        font-weight: normal;
			font-size:15px;
			letter-spacing: 2px;
			direction: rtl; 
			text-align:right;
			color:‎#ccc;
            place-items:center;
			display: grid;
			top:50%;
			left:100%;
			transform: trnslate(-50%,-50%);
			
			

			
    }
	.text{
	  color:black;
	  font-size: 20px;
	  font-wight: 700;
	  letter-spacing: 1px;
	  margin-bottom:2px;
	  position:relative;
	  animation: text 3s 1;
	   
	 
	}
	.title{
	  color:white;
	  font-size: 50px;
	  font-wight: 700;
	  letter-spacing: 1px;
	  margin-bottom:50px;
	  position:relative;
	  text-align: left;
	 
	}
	.slider{
	       margin-top:30px;
		   appearance: none;
	       -webkit-appearance: none;
			width: 150%;
			height:20px;
			outline: none;
			border-radius: 50px;
			background: white;
			display: grid;
			

			 
		
    }
    .slider::-webkit-slider-thumb{
	  -webkit-appearance: none;
	   appearance: none;
	   width: 20px;
	   height: 20px;
	   background-color: pink;
	   cursor: pointer;
	   border-radius: 50px;
    }
	

	
	.box-minmax{
	  margin-top: 10px;
	  width:130px;
	  justify-content:space-between;
	  font-size:15px;
	  color:#fffffff;
	  display:flex;
	}
	.box-minmax span:first-child{
	  margin-left:350px;
	 }
	.container .rs-label{
		position:relative;
		width:100%;
		border:outset ;
		
		
	
	 }
	
</style>




<?php
	$host="localhost";
	$user="root";
	$databasename="motor";
	
	error_reporting(E_ALL & ~E_NOTICE);
	ini_set('display_errors',1);
	$connect=mysqli_connect($host,$user,"",$databasename) ; //connect to sql
	
	/*if(isset($connect)){
		echo "The database has been successfully connected";
	}
	else{
		echo "database not connected";
	}*/
	
 
	
	//save the data from html to this variable 

	if(isset($_POST['save'])){
        /*for save data in database*/
	
		$query= "INSERT INTO table1(m1,m2,m3,m4,m5,m6) VALUE('".$_POST['motor1']."','".$_POST['motor2']."','".$_POST['motor3']."','".$_POST['motor4']."','".$_POST['motor5']."','".$_POST['motor6']."')";
		$result= mysqli_query($connect,$query);
	}
		else{
	    /*for on data in data base*/
		$query1= "INSERT INTO table_on (`on`) VALUES ('1')";
		$result1= mysqli_query($connect,$query1);
		}
	
 
     mysqli_close($connect)
	 







?>
</body>
    	
</html> 

