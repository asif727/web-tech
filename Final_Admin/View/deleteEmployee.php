
<?php
require("../Model/db.php");
$id = $_GET["id"];
$result = confirmDeleteMember($id);

 if(!isset($_SESSION['username'])){
	header('location: login.php');
 }
    
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee</title>
</head>
<body>
<div class="mainContainer">
			
			<div class="header">
				<div class="header"><h1 align="center">MyHome</h1>

			</div>
			<div class="sideNav">
	<a href="dashboard.php"><button class="adem">Dashboard</button></a><br>
    
	<a href="database.php"><button class="adem">Add Employee</button></a><br>
	
	<a href="memberView.php"><button class="dlem">View Employee</button></a><br>
	<a href="logout.php" ><button class="dlem">Logout</button></a><br>
	
				
				</div>
			
				
				
			

		</div>

	
    
	
		<div align="center">
		<h3>Delete Employee Profiles</h3><br>
        <p><?php echo $result['name'];?>, Are you sure you want to delete your account?</p><br>
		
		
		<a style=" padding: 10px 30px; background-color: red; color: #ffffff; border: none; border-radius: 10px;" href="../Controller/deleteEmployee.php?id=<?php echo $id;?>">Delete</a>
		<a style=" padding: 10px 30px; background-color: blue; color: #ffffff; border: none; border-radius: 10px;" href="dashboard.php">Go Back</a>

		</div>
       
	
    
</body>
</html>