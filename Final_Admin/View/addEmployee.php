<?php 
 session_start();
 if(!isset($_SESSION['username'])){
	header('location: login.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
  <link rel="stylesheet" href="./css/addEmployee.css">
  <style>
  	*{
  		margin: 0px;
  		padding: 0px;
  	}
  	.mainContainer{
  		background: black;
  		color: white;
  		height: 600px;
  	}
  
  input{
	border-radius: 5px;
	width: 300px;
	height: 40px;
	margin: 10px;
	
  }
  textarea{
  	
	border-radius: 5px;
	width: 300px;
	height: 50px;
	margin-left: 40px;
	margin-top: 10px;

	
  }
  
  a{
  	text-decoration: none;
  	color: white;
  }

  </style>

		
</head>

<body>
<div class="mainContainer">
		
<a href="dashboard.php"><button style=" margin: 20px; padding: 10px 20px; background-color: red; color: #ffffff; border: none; border-radius: 10px; ">
		Go Back</a></button>		

	<h2 style=text-align:center>ADMIN DASHBOARD</h2>
	<br>
	<br>	
	<form action="../Controller/empController.php" method="POST">
		<div align="center">
			<h3>ADD NEW EMPLOYEE</h3>
			
					<label  for =" ">Employee Name:</label>
					<input type="text" placeholder="Enter employee name" name="name"><br>
					<label  for =" ">Employee Salary:</label>
					<input type="text" placeholder="Enter employee salary" name="salary"><br>
					<label  for =" ">Employee Type:</label>
					<input type="text" placeholder="Enter employee type" name="type"><br>
					<label for="">Phone Number:</label>	
					<input type="number" placeholder="+880" name="phone"><br>
					<label for="textArea">Address:</label>		
                    <textarea id="textArea" name="address"></textarea><br><br>
				
			<button style="padding: 10px 30px; background-color: green; color: #ffffff; border: none; border-radius: 10px; margin-left: 100px; width: 300px; "  type="submit">ADD EMPLOYEE</button>
<br><br>
		
    
			 
		</div>
		
	</form>
	

</body>
</html>







