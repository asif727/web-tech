<?php

require("../Model/db.php");
$id = $_GET["id"];
$result = getEditMember($id);


 if(!isset($_SESSION['username'])){
	header('location: login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/database.css">
    <title>Edit Employee</title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
  label{

	margin: 10px 10px ;
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
  .editItems{
  	height: 300px;
  	width: 500px;
  	background: #404040;
  	color: white;
  	margin-left: 30%;
  	margin-top: 40px;
  	border-radius: 30px;
  	text-align: center;
  }
  .editItems h3{
  	margin-top: 30px;
  }
  .editContainer{
  	background: #333333;
  	color: white;
  	height: 550px;
  }
  button{
  	height: 30px;
  	width: 80px;
  	background: red;
  	color: white;
  	margin: 20px;
  	border-radius: 20px;
  }
  .editItems button{
  	width: 300px;
  	margin-left: 30%;
  }
  


  </style>
</head>
<body>
	<div class="editContainer">
		<div class="backBtn">
			<a href="dashboard.php"><button>Go Back</button></a>
		</div>
	

	<form action="../Controller/editEmployee.php" method="POST">
		      <div class="editItems">
		         <h3 >Update Employee Profile</h3>
		        <input type="text" name="id" value="<?php echo $result["m_id"] ?>" hidden>
				<label for="">Employee Name:</label>
				<input type="text" placeholder="Employee name" value="<?php echo $result["name"] ?>" name="name"><br>
				<label for="">Employee Salary:</label>
				<input type="text" placeholder="Employee salary" value="<?php echo $result["salary"] ?>" name="salary"><br>
				<label for="">Employee Type:</label>
				<input type="text" placeholder="Employee type" value="<?php echo $result["type"] ?>" name="type"><br>
				<label for="">Phone Number:</label>	
				<input type="number" placeholder="+880" value="<?php echo $result["phone"] ?>" name="phone"><br>
				<label for="">Address:</label>	
			   <textarea name="address"><?php echo $result["address"] ?></textarea>	<br>
		       <button type="submit">Update</button>
		       </div>
	</form>

</div> 
</body>
</html>