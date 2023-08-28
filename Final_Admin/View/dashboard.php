<?php 
require("../Model/db.php");
$result = dashboardView();

 if(!isset($_SESSION['username'])){
	header('location: login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard</title>
	<style>
		.footer{
                    background: #262926;
                    height: 310px;
                    width: 100%;
                    color: white;
                    text-align: center;
                    display: grid;
               }
               .footerDetails{
                 background: transparent;
                 color: white;
                 text-align: center;
                 height: 80px;
                 margin: 10px;
            }
            
            .footerContact{
                 background: #transparent;
                 color: white;
                 border-radius: 14px;
                 text-align: center;
            }
          
            .footerContact input{
                margin: 5px;
                height: 25px;
                width: 300px;
            }
             .footerContact button{
                height: 22px;
                width: 70px;
             }
              .footerContact textarea{
                height: 40px;
                width: 300px;
             }
             .sideNav{
	           float: left;
	           width: 180px;
	           height: 623px;
	           background: #333333;
	 
               }
             .rightNav{
             	display: grid;
             	grid-template-columns: repeat(1, 1fr);
             	grid-template-rows: repeat(3, 1fr);
             	float: right;
             	width: 200px;
	            height: 623px;
	            background: #333333;
             }
            
             table{
             	text-align: center;
             	margin-left: 40px;
             }
             table a{
             	text-decoration: none;
             	color: white;
             }
             th{
             	background: green;
             	color: white;
             }
             .mainContent{
             	text-align: center;
             	background: black;
             	color: white;
             	float: left;
	            height: 623px;
	            width: 870px;
	            margin-left: 15%;
	            margin-top: 5px;
	            margin-bottom: 5px;

             }
             .totalProfit{
             	
             	background: green;
             	color: white;
             	text-align: center;
             	margin: 10px;
             }
             .yearlyProfit{
             	background:red;
             	color: white;
             	text-align: center;
               	margin: 10px;

             }
             .totalEmp{
             	background: white;
             	color: black;
             	text-align: center;
             	margin: 10px;

             }
             .header h1{
	          margin-top: 30px;
            }
	</style>
</head>
<body style="background: white;">
<div class="mainContainer">
			
			<div class="header">
				<div class="header"><h1 align="center">ADMIN DASHBOARD</h1>

			</div>
			<div class="sideNav">
	        <a href="dashboard.php"><button class="dashBtn">DASHBOARD</button></a><br>
	
	        <a href="addEmployee.php"><button class="addemBtn">ADD EMPLOYEE</button></a><br>
	
	        <a href="logout.php" ><button class="logoutBtn">LOGOUT</button></a><br>		
		    </div>

		    </div>
		     <div class="rightNav">
	            <div class="totalProfit">
	            	<h4 style="margin-top: 70px;">MONTHLY PROFIT</h4>
	            	<span>40%</span>
	            </div>
	            <div class="totalEmp">
	            	<h4 style="margin-top: 70px;">TOTAL EMPLOYEE</h4>
	                <span>50</span>

	            </div>	
	            <div class="yearlyProfit">
	            	<h4 style="margin-top: 70px;">YEARLY PROFIT</h4>
	                <span>50%</span>

	            </div>	
		    </div>

		   <div class="mainContent">
		   	<h2>ALL EMPLOYEE</h2>
		   	<table border="1px">
		   		<tr>
		   		<th>EMPLOYEE ID</th>
				<th>EMPLOYEE NAME</th>
				<th>SALARY</th>
				<th>TYPE</th>
				<th>CONTACT NUMBER</th>
				<th>ADDRESS</th>
				
				<th colspan="4">ACTION</th>
		   		</tr>
		   		<?php 
				if($result->num_rows > 0){
					while($data = $result->fetch_assoc()) {
			?>
		   		<tr>
					<td><?php echo $data["m_id"]; ?></td>
					<td><a href="readMember.php?id='<?php echo $data["m_id"]; ?>'"><?php echo $data["name"]; ?></a></td>
						<td><?php echo $data["salary"]; ?></td>
						<td><?php echo $data["type"]; ?></td>
					<td><?php echo $data["phone"]; ?></td>
					<td><?php echo $data["address"]; ?></td>
				
				<td>
				<a href="editEmployee.php?id='<?php echo $data["m_id"]; ?>'">
					<button class="edit" style="padding: 10px 30px; background-color: #04AA6D; color: #ffffff; border: none; border-radius: 10px;">Update</button>
				</a>
				</td>

				<td>
				<a href="deleteEmployee.php?id='<?php echo $data["m_id"]; ?>'">
				<button style="padding: 10px 30px; background-color: red; color: #ffffff; border: none; border-radius: 10px;">Delete</button>
			    </a>
			   </td>

				</tr>
		   		<?php
				}
			}

			else {
				echo "<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>";
			}
			?>
		   	</table>
		   </div>


  
     <div class="footer">
            <h2>ABOUT US</h2>
            <hr>
           <div class="aboutUs">
                 <div class="footerDetails">
                    <h3>RECIPTIONIST</h3>
                    <h4>Asif Chowdhury</h4>
                    <span>I am a Admin of MyHome.</span>
                    <span>Contact:asif@gmail.com</span>
                </div>
               
               <div class="footerContact">
                <form action="">
                    <h4>CONTACT US</h4>
                   <input type="text" placeholder=" Email"><br>
                   <input  type="text" placeholder=" Password"><br>
                   <textarea name="" > </textarea><br>
                   <button>Submit</button>
                 </form>
          
             </div> 
           </div>
       </div>
    
 </div>    
</body>
</html>


